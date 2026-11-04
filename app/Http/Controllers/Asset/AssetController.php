<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetImage;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Throwable;

class AssetController extends Controller
{
    private const CONDITIONS = ['new', 'like_new', 'good', 'fair'];

    public function index(Request $request)
    {
        $query = Asset::query()
            ->published()
            ->with(['category', 'user', 'primaryImage']);

        $this->applyFilters($query, $request);

        $sort = $request->input('sort', 'latest');
        match ($sort) {
            'price_asc' => $query->orderBy('price_per_day'),
            'price_desc' => $query->orderByDesc('price_per_day'),
            default => $query->latest('published_at')->latest('id'),
        };

        $assets = $query->paginate(12)->withQueryString();
        $categories = Category::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('assets.index', compact('assets', 'categories'));
    }

    public function create()
    {
        $categories = $this->activeCategories();

        return view('assets.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(array_merge($this->assetRules(), [
            'images' => ['required', 'array', 'min:1', 'max:10'],
            'images.*' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'terms_accepted' => ['accepted'],
        ]), $this->messages());

        $storedPaths = [];

        try {
            $asset = DB::transaction(function () use ($request, $validated, &$storedPaths) {
                $asset = $request->user()->assets()->create([
                    ...$this->assetData($validated),
                    'status' => 'published',
                    'published_at' => now(),
                ]);

                $asset->forceFill([
                    'slug' => Str::slug($asset->title) . '-' . $asset->id,
                ])->save();

                foreach ($request->file('images', []) as $index => $file) {
                    $path = $file->store("assets/{$asset->id}", 'public');

                    if (!$path) {
                        throw new \RuntimeException('Không thể lưu ảnh tài sản.');
                    }

                    $storedPaths[] = $path;

                    $asset->images()->create([
                        'image_path' => $path,
                        'is_primary' => $index === 0,
                        'sort_order' => $index,
                    ]);
                }

                return $asset;
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($storedPaths);
            report($exception);

            return back()
                ->withInput($request->except('images'))
                ->withErrors(['images' => 'Không thể lưu tài sản hoặc ảnh. Vui lòng thử lại.']);
        }

        return redirect()
            ->route('assets.my-assets')
            ->with('success', 'Đăng tài sản thành công.');
    }

    public function myAssets(Request $request)
    {
        $user = auth()->user();

        // 1. Lấy danh sách danh mục để đổ dữ liệu vào thẻ <select> lọc
        $categories = Category::all();

        // 2. Thống kê cố định toàn bộ kho tài sản của User
        $totalAssetsCount = $user->assets()->count();
        $publishedCount  = $user->assets()->where('status', 'published')->count();
        $otherStatusCount = $user->assets()->where('status', '!=', 'published')->count();

        // 3. Query lọc danh sách bên dưới
        $query = $user->assets();

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $assets = $query->latest()->paginate(5)->withQueryString();

        return view('assets.my-assets', compact(
            'assets',
            'categories',
            'totalAssetsCount',
            'publishedCount',
            'otherStatusCount'
        ));
    }

    public function show(Asset $asset)
    {
        $asset->load(['category', 'user', 'images']);

        $isOwner = auth()->check() && $asset->isOwnedBy(auth()->user());

        abort_unless($asset->status === 'published' || $isOwner, 404);

        return view('assets.show', compact('asset', 'isOwner'));
    }

    public function edit(Asset $asset)
    {
        $this->authorizeOwner($asset);

        $asset->load(['category', 'images']);
        $categories = $this->activeCategories();

        return view('assets.edit', compact('asset', 'categories'));
    }

    public function update(Request $request, Asset $asset)
    {
        $this->authorizeOwner($asset);

        $validated = $request->validate(array_merge($this->assetRules(), [
            'images' => ['nullable', 'array', 'max:10'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'remove_images' => ['nullable', 'array'],
            'remove_images.*' => ['integer'],
        ]), $this->messages());

        $removedPaths = [];
        $newPaths = [];

        try {
            DB::transaction(function () use ($request, $asset, $validated, &$removedPaths, &$newPaths) {
                $asset->update($this->assetData($validated));

                if ($request->has('remove_images')) {
                    $imagesToRemove = $asset->images()
                        ->whereIn('id', $request->input('remove_images', []))
                        ->get();

                    foreach ($imagesToRemove as $image) {
                        $removedPaths[] = $image->image_path;
                        $image->delete();
                    }
                }

                foreach ($request->file('images', []) as $file) {
                    $path = $file->store("assets/{$asset->id}", 'public');

                    if (!$path) {
                        throw new \RuntimeException('Không thể lưu ảnh tài sản.');
                    }

                    $newPaths[] = $path;

                    $asset->images()->create([
                        'image_path' => $path,
                        'is_primary' => false,
                        'sort_order' => (int) $asset->images()->max('sort_order') + 1,
                    ]);
                }

                // Kiểm tra xem tài sản hiện tại CÒN ảnh nào đang đóng vai trò là ảnh chính (is_primary = true) hay không?
                $hasPrimary = $asset->images()->where('is_primary', true)->exists();

                // Nếu không còn ảnh chính nào (hoặc toàn bộ bị mất/vừa xóa ảnh cũ), tự động chọn ảnh đầu tiên làm ảnh chính
                if (!$hasPrimary) {
                    $firstImage = $asset->images()->orderBy('sort_order')->orderBy('id')->first();
                    if ($firstImage) {
                        $firstImage->update(['is_primary' => true]);
                    }
                }
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($newPaths);
            report($exception);

            return back()
                ->withInput($request->except('images'))
                ->withErrors(['images' => 'Không thể cập nhật tài sản hoặc ảnh. Vui lòng thử lại.']);
        }

        Storage::disk('public')->delete($removedPaths);

        return redirect()
            ->route('assets.my-assets')
            ->with('success', 'Cập nhật tài sản thành công.');
    }

    public function toggleStatus(Asset $asset)
    {
        $this->authorizeOwner($asset);

        if (!in_array($asset->status, ['published', 'hidden'], true)) {
            return back()->with('error', 'Chỉ có thể ẩn hoặc hiện tin đang hoạt động.');
        }

        if ($asset->status === 'published') {
            $asset->update(['status' => 'hidden']);
            $message = 'Đã ẩn tin tài sản khỏi danh sách công khai.';
        } else {
            $asset->update([
                'status' => 'published',
                'published_at' => $asset->published_at ?? now(),
            ]);
            $message = 'Đã hiển thị lại tin tài sản.';
        }

        return back()->with('success', $message);
    }

    public function destroyImage(Asset $asset, AssetImage $image)
    {
        $this->authorizeOwner($asset);
        abort_unless((int) $image->asset_id === (int) $asset->id, 404);

        $wasPrimary = $image->is_primary;
        $path = $image->image_path;

        DB::transaction(function () use ($image, $asset, $wasPrimary) {
            $image->delete();

            if ($wasPrimary) {
                $nextImage = $asset->images()->orderBy('sort_order')->orderBy('id')->first();

                if ($nextImage) {
                    $nextImage->update(['is_primary' => true]);
                }
            }
        });

        Storage::disk('public')->delete($path);

        return back()->with('success', 'Đã xóa ảnh tài sản.');
    }

    private function applyFilters(Builder $query, Request $request): void
    {
        if ($request->filled('q')) {
            $term = trim($request->string('q')->toString());

            $query->where(function (Builder $builder) use ($term) {
                $builder->where('title', 'like', "%{$term}%")
                    ->orWhere('description', 'like', "%{$term}%")
                    ->orWhere('brand', 'like', "%{$term}%")
                    ->orWhere('model', 'like', "%{$term}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->integer('category_id'));
        }

        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . trim($request->city) . '%');
        }

        if ($request->filled('min_price') && is_numeric($request->min_price)) {
            $query->where('price_per_day', '>=', $request->min_price);
        }

        if ($request->filled('max_price') && is_numeric($request->max_price)) {
            $query->where('price_per_day', '<=', $request->max_price);
        }
    }

    private function assetRules(): array
    {
        return [
            'title' => ['required', 'string', 'max:180'],
            'category_id' => [
                'required',
                Rule::exists('categories', 'id')->where(fn($query) => $query->where('is_active', true)),
            ],
            'description' => ['required', 'string', 'min:20', 'max:10000'],
            'brand' => ['nullable', 'string', 'max:120'],
            'model' => ['nullable', 'string', 'max:160'],
            'condition' => ['required', Rule::in(self::CONDITIONS)],
            'price_per_day' => ['required', 'numeric', 'min:1000', 'max:9999999999'],
            'deposit' => ['nullable', 'numeric', 'min:0', 'max:9999999999'],
            'pickup_address' => ['required', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'district' => ['nullable', 'string', 'max:100'],
            'accessories' => ['nullable', 'string', 'max:5000'],
            'rental_rules' => ['nullable', 'string', 'max:5000'],
        ];
    }

    private function assetData(array $validated): array
    {
        return [
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'description' => $validated['description'],
            'brand' => $validated['brand'] ?? null,
            'model' => $validated['model'] ?? null,
            'condition' => $validated['condition'],
            'price_per_day' => $validated['price_per_day'],
            'deposit' => $validated['deposit'] ?? 0,
            'pickup_address' => $validated['pickup_address'],
            'city' => $validated['city'] ?? null,
            'district' => $validated['district'] ?? null,
            'accessories' => $validated['accessories'] ?? null,
            'rental_rules' => $validated['rental_rules'] ?? null,
        ];
    }

    private function activeCategories()
    {
        return Category::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
    }

    private function authorizeOwner(Asset $asset): void
    {
        abort_unless(auth()->check() && $asset->isOwnedBy(auth()->user()), 403);
    }

    private function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tên tài sản.',
            'title.max' => 'Tên tài sản không được vượt quá 180 ký tự.',
            'category_id.required' => 'Vui lòng chọn danh mục tài sản.',
            'category_id.exists' => 'Danh mục đã chọn không hợp lệ hoặc đã bị khóa.',
            'description.required' => 'Vui lòng mô tả tài sản.',
            'description.min' => 'Mô tả cần có ít nhất 20 ký tự.',
            'condition.required' => 'Vui lòng chọn tình trạng tài sản.',
            'condition.in' => 'Tình trạng tài sản không hợp lệ.',
            'price_per_day.required' => 'Vui lòng nhập giá thuê mỗi ngày.',
            'price_per_day.numeric' => 'Giá thuê phải là một con số.',
            'price_per_day.min' => 'Giá thuê tối thiểu là 1.000 đồng/ngày.',
            'deposit.numeric' => 'Tiền đặt cọc phải là một con số.',
            'pickup_address.required' => 'Vui lòng nhập địa chỉ nhận tài sản.',
            'images.required' => 'Bạn cần tải lên ít nhất một ảnh tài sản.',
            'images.min' => 'Bạn cần tải lên ít nhất một ảnh tài sản.',
            'images.max' => 'Mỗi lần chỉ được tải tối đa 10 ảnh.',
            'images.*.image' => 'Tệp tải lên phải là hình ảnh.',
            'images.*.mimes' => 'Ảnh chỉ chấp nhận JPG, PNG hoặc WebP.',
            'images.*.max' => 'Mỗi ảnh không được vượt quá 5MB.',
            'terms_accepted.accepted' => 'Bạn cần xác nhận quyền đăng cho thuê tài sản.',
        ];
    }
}
