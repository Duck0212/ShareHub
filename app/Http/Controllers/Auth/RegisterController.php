<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    //Hiển thị trang đăng ký.
    public function show(): View
    {
        return view('auth.register');
    }

    //Xử lý đăng ký tài khoản.
    public function store(Request $request): RedirectResponse
    {
        //Kiểm tra dữ liệu đầu vào
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'confirmed',
                Password::min(8)->mixedCase()->numbers(),
            ],

            'terms' => ['accepted'],
        ], [
            'name.required' => 'Vui lòng nhập họ và tên.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Email này đã được đăng ký.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'terms.accepted' => 'Bạn cần đồng ý với điều khoản dịch vụ.',
        ]);

        //Tạo tài khoản người dùng
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        // Phát sự kiện đăng ký để Laravel gửi email xác minh.
        event(new Registered($user));

        // Đăng nhập người dùng vừa đăng ký.
        Auth::login($user);

        // Tạo lại session sau khi đăng nhập.
        $request->session()->regenerate();

        // Chuyển đến trang xác minh email.
        return redirect()->route('verification.show');
    }
}
