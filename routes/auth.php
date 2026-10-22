<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\ChangeVerificationEmailController;

//Đăng nhập
Route::middleware('guest')->group(function () {
    //Mở trang đăng nhập
    Route::get('/login', [LoginController::class, 'show'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'store'])
        ->name('login.store');
});

//Đăng xuất
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

//Đăng ký
Route::middleware('guest')->group(function () {
    //Mở trang đăng ký
    Route::get('/register', [RegisterController::class, 'show'])
        ->name('register');

    //Gửi dữ liệu và tạo tài khoản
    Route::post('/register', [RegisterController::class, 'store'])
        ->name('register.store');
});

//Quên mật khẩu
Route::middleware('guest')->group(function () {
    //Trang quên mật khẩu
    Route::get('/forgot-password', [ForgotPasswordController::class, 'show'])
        ->name('password.request');
    //Gửi liên kết email đặt lại mật khẩu
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])
        ->name('password.email');
});

//Đặt lại mật khẩu
Route::middleware('guest')->group(function () {
    //Trang đặt lại mật khẩu
    Route::get('/reset-password', [ResetPasswordController::class, 'show'])
        ->name('password.reset');

    //Đổi mật khẩu
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
        ->name('password.update');
});

//Xác thực email
Route::middleware('auth')->group(function () {
    //Trang xác minh email.
    Route::get('/verify-email', [EmailVerificationController::class, 'show'])
        ->name('verification.show');

    //Xử lý liên kết xác minh trong email.
    Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    //Gửi lại email xác minh.
    Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend',])
        ->middleware('throttle:6,1')
        ->name('verification.send');
});

//Đổi địa chỉ Email
Route::middleware('auth')->group(function () {
    //Trang đổi địa chỉ Email
    Route::get('/verify-email/change', [ChangeVerificationEmailController::class, 'show'])
        ->name('verification.email.change');

    //Cập nhật Email mới
    Route::put('/verify-email/change', [ChangeVerificationEmailController::class, 'update'])
        ->name('verification.email.update');
});
