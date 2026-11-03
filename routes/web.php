<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

//-----Home routes-----

//Trang chủ
Route::get('/', [HomeController::class, 'home'])
    ->name('home');

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
            //->middleware('auth')
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
Route::get('/users/{username}', [UserController::class, 'show'])->name('users.show');

Route::prefix('my')
    ->middleware('auth')
    ->name('my.')
    ->group(function () {

        //Hồ sơ cá nhân
        Route::get('/profile', [UserController::class, 'profile'])
            ->name('profile');

        //Chỉnh sửa thông tin cá nhân
        Route::get('/profile/edit', [UserController::class, 'edit'])
            ->name('profile.edit');

        //Cập nhật thông tin cá nhân
        Route::put('/profile', [UserController::class, 'update'])
            ->name('profile.update');

        //Cài đặt tài khoản


        //Hoạt động cá nhân
        Route::get('/activity', [UserController::class, 'activity'])
            ->name('activity');
    });
