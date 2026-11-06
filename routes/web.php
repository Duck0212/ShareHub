<?php

use App\Http\Controllers\Asset\AssetController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RentalRequest\RentalRequestController;
use Illuminate\Support\Facades\Route;

//-----Home routes-----

//Trang chủ
Route::get('/', [HomeController::class, 'home'])
    ->name('home');

//-----Assets routes-----
Route::prefix('assets')
    ->name('assets.')
    ->group(function () {
        // Kho tài sản công khai
        Route::get('/', [AssetController::class, 'index'])->name('index');

        // Các thao tác cần đăng nhập
        Route::middleware('auth')->group(function () {
            Route::get('/create', [AssetController::class, 'create'])->name('create');
            Route::post('/', [AssetController::class, 'store'])->name('store');

            Route::get('/my-assets', [AssetController::class, 'myAssets'])->name('my-assets');

            Route::get('/{asset}/edit', [AssetController::class, 'edit'])->name('edit');
            Route::put('/{asset}', [AssetController::class, 'update'])->name('update');

            Route::patch('/{asset}/status', [AssetController::class, 'toggleStatus'])
                ->name('toggle-status');

            Route::delete('/{asset}/images/{image}', [AssetController::class, 'destroyImage'])
                ->name('images.destroy');
        });

        // Đặt sau các route cụ thể như /create, /my-assets, /{asset}/edit
        Route::get('/{asset}', [AssetController::class, 'show'])->name('show');
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
        // Danh sách công khai: chỉ hiển thị yêu cầu đang mở
        Route::get('/', [RentalRequestController::class, 'index'])->name('index');

        // Các thao tác yêu cầu đăng nhập
        Route::middleware('auth')->group(function () {
            Route::get('/create', [RentalRequestController::class, 'create'])->name('create');
            Route::post('/', [RentalRequestController::class, 'store'])->name('store');
            Route::get('/my-requests', [RentalRequestController::class, 'myRequests'])->name('my-requests');

            // Chỉnh sửa
            Route::get('/{rentalRequest}/edit', [RentalRequestController::class, 'edit'])->name('edit');
            Route::put('/{rentalRequest}', [RentalRequestController::class, 'update'])->name('update');

            // Cập nhật trạng thái yêu cầu
            Route::patch('/{rentalRequest}/status', [RentalRequestController::class, 'updateStatus'])
                ->name('update-status');

            // Xóa hình ảnh của yêu cầu thuê
            Route::delete('/{rentalRequest}/images/{image}', [RentalRequestController::class, 'destroyImage'])
                ->name('images.destroy');
        });

        // Đặt sau các route cụ thể để tránh xung đột với /create và /my-requests
        Route::get('/{rentalRequest}', [RentalRequestController::class, 'show'])
            ->name('show');
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
