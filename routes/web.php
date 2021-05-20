<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', [SiteController::class, 'index']);
Route::get('/product', [SiteController::class, 'show']);


Route::middleware('auth')->group(function () {
    Route::get('/home', [SiteController::class, 'home']);

    Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('users', UserController::class);
    });
});
