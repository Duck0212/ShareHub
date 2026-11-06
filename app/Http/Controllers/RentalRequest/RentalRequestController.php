<?php

namespace App\Http\Controllers\RentalRequest;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\RentalRequest;
use App\Models\RentalRequestImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Throwable;

class RentalRequestController extends Controller
{
    public function index(Request $request)
    {
        $query = RentalRequest::query()
            ->open()
            ->with(['user', 'category', 'images']);

        $this->applyPublicFilters($query, $request);

        match ($request->input('sort', 'latest')) {
            'budget_asc' => $query->orderByRaw('min_daily_budget IS NULL')->orderBy('min_daily_budget'),
            'budget_desc' => $query->orderByDesc('max_daily_budget'),
            'start_date' => $query->orderBy('start_date'),
            default => $query->latest('published_at')->latest('id'),
        };

        $rentalRequests = $query->paginate(12)->withQueryString();
        $categories = $this->activeCategories();

        return view('rental-requests.index', compact('rentalRequests', 'categories'));
    }

    public function create()
    {
        $categories = $this->activeCategories();

        return view('rental-requests.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $intent = $request->input('intent', 'open');
        abort_unless(in_array($intent, ['draft', 'open'], true), 422);

        $validated = $request->validate(
            $this->rules(),
            $this->messages()
        );

        $storedPaths = [];

        try {
            $rentalRequest = DB::transaction(function () use ($request, $validated, $intent, &$storedPaths) {
                $rentalRequest = $request->user()->rentalRequests()->create([
                    'category_id' => $validated['category_id'],
                    'title' => $validated['title'],
                    'quantity' => $validated['quantity'] ?? 1,
                    'start_date' => $validated['start_date'] ?? null,
                    'end_date' => $validated['end_date'] ?? null,
                    'city' => $validated['city'] ?? null,
                    'district' => $validated['district'] ?? null,
                    'location_radius' => $validated['location_radius'] ?? null,
                    'pickup_mode' => $validated['pickup_mode'] ?? 'direct',
                    'min_daily_budget' => $validated['min_daily_budget'] ?? null,
                    'max_daily_budget' => $validated['max_daily_budget'] ?? null,
                    'total_budget' => $validated['total_budget'] ?? null,
                    'description' => $validated['description'] ?? '',
                    'status' => $intent === 'draft'
                        ? RentalRequest::STATUS_DRAFT
                        : RentalRequest::STATUS_OPEN,
                    'published_at' => $intent === 'open' ? now() : null,
                ]);

                foreach ($request->file('images', []) as $index => $file) {
                    $path = $file->store("rental-requests/{$rentalRequest->id}", 'public');

                    if (!$path) {
                        throw new \RuntimeException('Không thể lưu ảnh yêu cầu thuê.');
                    }

                    $storedPaths[] = $path;

                    $rentalRequest->images()->create([
                        'image_path' => $path,
                        'sort_order' => $index,
                    ]);
                }

                return $rentalRequest;
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($storedPaths);
            report($exception);

            return back()
                ->withInput($request->except('images'))
                ->withErrors(['images' => 'Không thể lưu yêu cầu hoặc ảnh đính kèm. Vui lòng thử lại.']);
        }

        return redirect()
            ->route('rental-requests.my-requests')
            ->with('success', $intent === 'draft'
                ? 'Đã lưu yêu cầu thuê dưới dạng bản nháp.'
                : 'Đăng yêu cầu thuê thành công.');
    }

    public function myRequests(Request $request)
    {
        $user = $request->user();
        $query = $user->rentalRequests()->with(['category', 'images']);

        if ($request->filled('q')) {
            $term = trim((string) $request->input('q'));
            $query->where(function (Builder $builder) use ($term) {
                $builder->where('title', 'like', "%{$term}%")
                    ->orWhere('description', 'like', "%{$term}%");
            });
        }

        if ($request->filled('status') && in_array($request->input('status'), [
            'draft',
            'open',
            'closed',
        ], true)) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->integer('category_id'));
        }

        $rentalRequests = $query->latest()->paginate(10)->withQueryString();

        $counts = [
            'all' => $user->rentalRequests()->count(),
            'draft' => $user->rentalRequests()->where('status', 'draft')->count(),
            'open' => $user->rentalRequests()->where('status', 'open')->count(),
            'closed' => $user->rentalRequests()->where('status', 'closed')->count(),
        ];

        $categories = $this->activeCategories();

        return view('rental-requests.my-requests', compact(
            'rentalRequests',
            'counts',
            'categories'
        ));
    }

    public function show(Request $request, RentalRequest $rentalRequest)
    {
        $rentalRequest->load([
            'category',
            'user',
            'images',
        ]);

        $isOwner = auth()->id() === $rentalRequest->user_id;

        // Không hiển thị bài nháp hoặc bài đã đóng cho người không sở hữu.
        if ($rentalRequest->status !== 'open' && !$isOwner) {
            abort(404);
        }

        // Chỉ hỗ trợ hai kiểu sắp xếp hợp lệ.
        $recommendationSort = $request->query('recommendation_sort', 'latest');

        if (!in_array($recommendationSort, ['latest', 'oldest'], true)) {
            $recommendationSort = 'latest';
        }

        // Gợi ý các yêu cầu đang mở cùng danh mục.
        $relatedQuery = RentalRequest::query()
            ->with([
                'category',
                'user',
                'images',
            ])
            ->where('status', 'open')
            ->where('category_id', $rentalRequest->category_id)
            ->where('id', '!=', $rentalRequest->id);

        // Sắp xếp theo thời gian đăng, dùng created_at
        // làm giá trị thay thế nếu published_at chưa có.
        if ($recommendationSort === 'oldest') {
            $relatedQuery->orderByRaw('COALESCE(published_at, created_at) ASC');
        } else {
            $relatedQuery->orderByRaw('COALESCE(published_at, created_at) DESC');
        }

        $relatedRequests = $relatedQuery->paginate(
            4,
            ['*'],
            'recommendations_page'
        )->withQueryString();

        return view('rental-requests.show', compact(
            'rentalRequest',
            'isOwner',
            'relatedRequests',
            'recommendationSort',
        ));
    }

    public function updateStatus(Request $request, RentalRequest $rentalRequest)
    {
        abort_unless($rentalRequest->isOwnedBy($request->user()), 403);

        $validated = $request->validate([
            'status' => ['required', 'in:draft,open,closed'],
        ]);

        $status = $validated['status'];

        // Luồng trạng thái hợp lệ:
        // open   -> closed | draft
        // closed -> open   | draft
        // draft  -> open | closed
        // Không cho phép tự chuyển sang trạng thái hiện tại.
        $allowedTransitions = [
            RentalRequest::STATUS_OPEN => ['closed', RentalRequest::STATUS_DRAFT],
            'closed' => [RentalRequest::STATUS_OPEN, RentalRequest::STATUS_DRAFT],
            RentalRequest::STATUS_DRAFT => [RentalRequest::STATUS_OPEN, 'closed'],
        ];

        $currentStatus = $rentalRequest->status;
        if (
            !isset($allowedTransitions[$currentStatus]) ||
            !in_array($status, $allowedTransitions[$currentStatus], true)
        ) {
            return back()->withErrors([
                'status' => 'Không thể chuyển trạng thái yêu cầu thuê từ trạng thái hiện tại sang trạng thái đã chọn.',
            ]);
        }

        // Đọc lại bản ghi trong transaction để tránh cập nhật dựa trên trạng thái cũ
        // nếu có một thao tác khác vừa thay đổi trạng thái.
        $updated = DB::transaction(function () use ($rentalRequest, $request, $status, $allowedTransitions) {
            $lockedRequest = RentalRequest::query()
                ->lockForUpdate()
                ->findOrFail($rentalRequest->id);

            abort_unless($lockedRequest->isOwnedBy($request->user()), 403);

            $lockedCurrentStatus = $lockedRequest->status;
            if (
                !isset($allowedTransitions[$lockedCurrentStatus]) ||
                !in_array($status, $allowedTransitions[$lockedCurrentStatus], true)
            ) {
                return false;
            }

            $lockedRequest->status = $status;
            $lockedRequest->published_at = match ($status) {
                RentalRequest::STATUS_OPEN => $lockedRequest->published_at ?? now(),
                RentalRequest::STATUS_DRAFT => null,
                default => $lockedRequest->published_at,
            };
            $lockedRequest->save();

            return true;
        });

        if (!$updated) {
            return back()->withErrors([
                'status' => 'Trạng thái yêu cầu vừa thay đổi. Vui lòng tải lại trang và thử lại.',
            ]);
        }

        return back()->with('success', match ($status) {
            RentalRequest::STATUS_OPEN => 'Yêu cầu thuê đã được mở công khai.',
            'closed' => 'Yêu cầu thuê đã được đóng.',
            default => 'Yêu cầu thuê đã được chuyển về bản nháp.',
        });
    }

    private function applyPublicFilters(Builder $query, Request $request): void
    {
        if ($request->filled('q')) {
            $term = trim((string) $request->input('q'));
            $query->where(function (Builder $builder) use ($term) {
                $builder->where('title', 'like', "%{$term}%")
                    ->orWhere('description', 'like', "%{$term}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->integer('category_id'));
        }

        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . trim((string) $request->input('city')) . '%');
        }

        if ($request->filled('min_budget')) {
            $query->where(function (Builder $builder) use ($request) {
                $builder->whereNull('max_daily_budget')
                    ->orWhere('max_daily_budget', '>=', $request->input('min_budget'));
            });
        }

        if ($request->filled('max_budget')) {
            $query->where(function (Builder $builder) use ($request) {
                $builder->whereNull('min_daily_budget')
                    ->orWhere('min_daily_budget', '<=', $request->input('max_budget'));
            });
        }

        if ($request->filled('start_date')) {
            $query->whereDate('end_date', '>=', $request->input('start_date'));
        }
    }

    private function rules(): array
    {
        return [
            // Bản nháp vẫn cần đủ thông tin cốt lõi để chủ yêu cầu có thể mở công khai sau đó.
            'title' => ['required', 'string', 'max:180'],
            'category_id' => ['required', 'integer', Rule::exists('categories', 'id')->where('is_active', true)],
            'quantity' => ['nullable', 'integer', 'min:1', 'max:999'],
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'city' => ['required', 'string', 'max:100'],
            'district' => ['nullable', 'string', 'max:100'],
            'location_radius' => ['nullable', 'integer', 'min:1', 'max:100'],
            'pickup_mode' => ['nullable', 'in:direct,ship'],
            'min_daily_budget' => ['nullable', 'numeric', 'min:0', 'max:9999999999'],
            'max_daily_budget' => [
                'nullable',
                'numeric',
                'min:0',
                'max:9999999999',
                function ($attribute, $value, $fail) {
                    $min = request()->input('min_daily_budget');
                    if ($value !== null && $min !== null && is_numeric($value) && is_numeric($min) && (float) $value < (float) $min) {
                        $fail('Ngân sách tối đa mỗi ngày phải lớn hơn hoặc bằng ngân sách tối thiểu.');
                    }
                },
            ],
            'total_budget' => ['nullable', 'numeric', 'min:0', 'max:9999999999'],
            'description' => ['required', 'string', 'max:10000'],
            'images' => ['nullable', 'array', 'max:5'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
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

    private function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề yêu cầu thuê.',
            'category_id.required' => 'Vui lòng chọn danh mục mong muốn.',
            'start_date.required' => 'Vui lòng chọn ngày nhận đồ.',
            'start_date.after_or_equal' => 'Ngày nhận đồ không được ở quá khứ.',
            'end_date.required' => 'Vui lòng chọn ngày hoàn trả.',
            'end_date.after_or_equal' => 'Ngày hoàn trả phải bằng hoặc sau ngày nhận đồ.',
            'city.required' => 'Vui lòng nhập tỉnh/thành phố hoặc khu vực nhận đồ.',
            'max_daily_budget.gte' => 'Ngân sách tối đa mỗi ngày phải lớn hơn hoặc bằng ngân sách tối thiểu.',
            'images.max' => 'Bạn chỉ được tải lên tối đa 5 ảnh tham khảo.',
            'images.*.image' => 'Tệp đính kèm phải là hình ảnh.',
            'images.*.mimes' => 'Ảnh chỉ được có định dạng JPG, JPEG, PNG hoặc WEBP.',
            'images.*.max' => 'Mỗi ảnh không được vượt quá 5MB.',
        ];
    }

    public function edit(RentalRequest $rentalRequest)
    {
        // Đảm bảo chỉ chủ sở hữu mới được chỉnh sửa
        abort_unless($rentalRequest->isOwnedBy(auth()->user()), 403);

        $rentalRequest->load('images');
        $categories = $this->activeCategories();

        return view('rental-requests.edit', compact('rentalRequest', 'categories'));
    }

    public function update(Request $request, RentalRequest $rentalRequest)
    {
        // Đảm bảo phân quyền
        abort_unless($rentalRequest->isOwnedBy(auth()->user()), 403);

        $validated = $request->validate(
            $this->rules(),
            $this->messages()
        );

        $storedPaths = [];

        try {
            DB::transaction(function () use ($request, $validated, $rentalRequest, &$storedPaths) {
                $rentalRequest->update([
                    'category_id' => $validated['category_id'],
                    'title' => $validated['title'],
                    'quantity' => $validated['quantity'] ?? 1,
                    'start_date' => $validated['start_date'] ?? null,
                    'end_date' => $validated['end_date'] ?? null,
                    'city' => $validated['city'] ?? null,
                    'district' => $validated['district'] ?? null,
                    'location_radius' => $validated['location_radius'] ?? null,
                    'pickup_mode' => $validated['pickup_mode'] ?? 'direct',
                    'min_daily_budget' => $validated['min_daily_budget'] ?? null,
                    'max_daily_budget' => $validated['max_daily_budget'] ?? null,
                    'total_budget' => $validated['total_budget'] ?? null,
                    'description' => $validated['description'] ?? '',
                ]);

                // Xử lý thêm ảnh mới nếu có tải lên
                foreach ($request->file('images', []) as $index => $file) {
                    $path = $file->store("rental-requests/{$rentalRequest->id}", 'public');

                    if (!$path) {
                        throw new \RuntimeException('Không thể lưu ảnh yêu cầu thuê.');
                    }

                    $storedPaths[] = $path;

                    $rentalRequest->images()->create([
                        'image_path' => $path,
                        'sort_order' => $rentalRequest->images()->count() + $index,
                    ]);
                }
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($storedPaths);
            report($exception);

            return back()
                ->withInput($request->except('images'))
                ->withErrors(['images' => 'Không thể cập nhật yêu cầu. Vui lòng thử lại.']);
        }

        return redirect()
            ->route('rental-requests.my-requests')
            ->with('success', 'Cập nhật yêu cầu thuê thành công.');
    }

    public function destroyImage(RentalRequest $rentalRequest, RentalRequestImage $image)
    {
        abort_unless($rentalRequest->isOwnedBy(auth()->user()), 403);

        if ($image->rental_request_id === $rentalRequest->id) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        return back()->with('success', 'Đã xóa ảnh thành công.');
    }
}
