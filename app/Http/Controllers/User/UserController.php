<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Hiển thị hồ sơ công khai theo username.
    public function show(string $username)
    {
        $user = User::where('username', $username)->firstOrFail();

        return view('users.show', compact('user'));
    }

    // Hiển thị hồ sơ của tài khoản đang đăng nhập.
    public function profile(Request $request)
    {
        $user = $request->user();

        return view('users.profile', compact('user'));
    }

    // Hiển thị biểu mẫu chỉnh sửa hồ sơ.
    public function edit(Request $request)
    {
        $user = $request->user();

        return view('users.edit', compact('user'));
    }

    // Cập nhật thông tin hồ sơ và hình ảnh.
    public function update(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => [
                'nullable',
                'string',
                'max:50',
                'regex:/^[a-z0-9]+$/',
                Rule::unique('users', 'username')->ignore($user->id),
            ],
            'bio' => ['nullable', 'string', 'max:300'],
            'city' => ['nullable', 'string', 'max:100'],
            'district' => ['nullable', 'string', 'max:100'],
            'tags' => ['nullable', 'string', 'max:500'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'remove_avatar' => ['sometimes', 'boolean'],
        ], [
            'name.required' => 'Vui lòng nhập tên hiển thị.',
            'name.max' => 'Tên hiển thị không được vượt quá 255 ký tự.',
            'username.max' => 'Tên người dùng không được vượt quá 50 ký tự.',
            'username.regex' => 'Tên người dùng chỉ được chứa chữ thường và số.',
            'username.unique' => 'Tên người dùng này đã được sử dụng.',
            'bio.max' => 'Mô tả cá nhân không được vượt quá 300 ký tự.',
            'city.max' => 'Tên tỉnh/thành phố không hợp lệ.',
            'district.max' => 'Tên quận/huyện không hợp lệ.',
            'tags.max' => 'Danh sách thẻ sở thích quá dài.',
            'avatar.image' => 'Ảnh đại diện phải là định dạng hình ảnh.',
            'avatar.mimes' => 'Ảnh đại diện chỉ chấp nhận JPG, PNG hoặc WebP.',
            'avatar.max' => 'Ảnh đại diện không được vượt quá 5MB.',
            'cover_image.image' => 'Ảnh bìa phải là định dạng hình ảnh.',
            'cover_image.mimes' => 'Ảnh bìa chỉ chấp nhận JPG, PNG hoặc WebP.',
            'cover_image.max' => 'Ảnh bìa không được vượt quá 5MB.',
        ]);

        // Chuẩn hóa tối đa 5 thẻ, loại bỏ thẻ trống và thẻ trùng.
        $tags = collect(explode(',', $validated['tags'] ?? ''))
            ->map(fn(string $tag) => trim($tag))
            ->filter()
            ->unique()
            ->take(5)
            ->values()
            ->all();

        // Tạo chuỗi địa điểm dùng để hiển thị trên hồ sơ.
        $city = $validated['city'] ?? null;
        $district = $validated['district'] ?? null;
        $location = collect([$district, $city])
            ->filter()
            ->implode(', ');

        $avatarPath = $user->avatar;
        $coverImagePath = $user->cover_image;

        // Nếu tải avatar mới, lưu file mới trước rồi mới xóa file cũ.
        if ($request->hasFile('avatar')) {
            $newAvatarPath = $request->file('avatar')->store('avatars', 'public');

            if ($newAvatarPath !== false) {
                if ($avatarPath) {
                    Storage::disk('public')->delete($avatarPath);
                }

                $avatarPath = $newAvatarPath;
            }
        } elseif ($request->boolean('remove_avatar')) {
            if ($avatarPath) {
                Storage::disk('public')->delete($avatarPath);
            }

            $avatarPath = null;
        }

        // Thay ảnh bìa nếu người dùng chọn file mới.
        if ($request->hasFile('cover_image')) {
            $newCoverImagePath = $request->file('cover_image')->store('covers', 'public');

            if ($newCoverImagePath !== false) {
                if ($coverImagePath) {
                    Storage::disk('public')->delete($coverImagePath);
                }

                $coverImagePath = $newCoverImagePath;
            }
        }

        $user->update([
            'name' => $validated['name'],
            'username' => $validated['username'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'city' => $city,
            'district' => $district,
            'location' => $location ?: null,
            'tags' => $tags,
            'avatar' => $avatarPath,
            'cover_image' => $coverImagePath,
        ]);

        return redirect()
            ->route('my.profile')
            ->with('success', 'Cập nhật hồ sơ thành công.');
    }

    // Hiển thị trang hoạt động cá nhân.
    public function activity(Request $request)
    {
        $user = $request->user();

        return view('users.activity', compact('user'));
    }
}
