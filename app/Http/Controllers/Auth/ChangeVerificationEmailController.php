<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ChangeVerificationEmailController extends Controller
{
    // Hiển thị biểu mẫu đổi email.
    public function show(Request $request): View|RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('home');
        }

        return view('auth.edit-email');
    }

    // Cập nhật email và gửi liên kết xác minh mới.
    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();

        // Không cho đổi email qua luồng này nếu đã xác minh.
        if ($user->hasVerifiedEmail()) {
            return redirect()->route('home');
        }

        $validated = $request->validate([
            'new_email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => [
                'required',
                'current_password',
            ],
        ], [
            'new_email.required' => 'Vui lòng nhập địa chỉ email mới.',
            'new_email.email' => 'Địa chỉ email không hợp lệ.',
            'new_email.unique' => 'Email này đã được tài khoản khác sử dụng.',
            'password.required' => 'Vui lòng nhập mật khẩu hiện tại.',
            'password.current_password' => 'Mật khẩu hiện tại không chính xác.',
        ]);

        // Cập nhật email và đưa tài khoản về trạng thái chưa xác minh.
        $user->email = $validated['new_email'];
        $user->email_verified_at = null;
        $user->save();

        // Gửi liên kết xác minh đến email mới.
        $user->sendEmailVerificationNotification();

        // Quay về trang xác minh email.
        return redirect()
            ->route('verification.show')
            ->with('status', 'email-updated');
    }
}
