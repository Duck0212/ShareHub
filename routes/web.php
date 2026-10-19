<?php

use Illuminate\Support\Facades\Route;

//-----Home routes-----

//Trang chủ
Route::view('/', 'home.index')->name('home');

//-----Assets routes-----
Route::prefix('assets')
    ->name('assets.')
    ->group(function () {
        //Kho tài sản
        Route::view('/', 'assets.index')->name('index');

        //Đăng tài sản cho thuê
        Route::view('/create', 'assets.create')
            ->middleware('auth')
            ->name('create');

        //Danh sách tài sản của tôi
        Route::view('/my-assets', 'assets.my-assets')
            ->middleware('auth')
            ->name('my-assets');

        //Chỉnh sửa tài sản
        Route::view('/{asset}/edit', 'assets.edit')
            ->middleware('auth')
            ->name('edit');

        //Chi tiết tài sản
        Route::view('/{asset}', 'assets.show')->name('show');
    });

//-----Auth routes-----
//Đăng nhập
Route::view('/login', 'auth.login')->name('login');

//Đăng ký
Route::view('/register', 'auth.register')->name('register');

//Quên mật khẩu
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');

//Đặt lại mật khẩu
Route::view('/reset-password/{token}', 'auth.reset-password')->name('reset-password');

//Xác thực email
Route::view('/verify-email', 'auth.verify-email')
    ->middleware('auth')
    ->name('verify-email');

//-----Messages routes-----
Route::prefix('messages')
    ->middleware('auth')
    ->name('messages.')
    ->group(function () {
        //Danh sách tin nhắn
        Route::view('/', 'messages.index')->name('index');

        //Chi tiết tin nhắn
        Route::view('/{message}', 'messages.show')->name('show');
    });
//-----Notifications routes-----
Route::prefix('notifications')
    ->middleware('auth')
    ->name('notifications.')
    ->group(function () {
        //Danh sách thông báo
        Route::view('/', 'notifications.index')->name('index');

        //Chi tiết thông báo

    });

//-----Rental-requests routes-----
Route::prefix('rental-requests')
    ->name('rental-requests.')
    ->group(function () {
        //Danh sách nhu cầu thuê
        Route::view('/', 'rental-requests.index')->name('index');

        //Đăng yêu cầu thuê
        Route::view('/create', 'rental-requests.create')
            ->middleware('auth')
            ->name('create');

        //Danh sách yêu cầu thuê của tôi
        Route::view('/my-requests', 'rental-requests.my-requests')
            ->middleware('auth')
            ->name('my-requests');

        //Chi tiết yêu cầu thuê
        Route::view('/{rentalRequest}', 'rental-requests.show')->name('show');
    });

//-----Users routes-----
//Hồ sơ người dùng công khai
Route::view('/users/{user}', 'users.show')->name('users.show');

Route::prefix('my')->middleware('auth')->name('my.')->group(function () {

    //Hồ sơ cá nhân
    Route::view('/profile', 'users.profile')->name('profile');

    //Chỉnh sửa thông tin cá nhân
    Route::view('/profile/edit', 'users.edit')->name('profile.edit');

    //Cài đặt tài khoản


    //Hoạt động cá nhân
    Route::view('/activity', 'users.activity')->name('activity');
});
