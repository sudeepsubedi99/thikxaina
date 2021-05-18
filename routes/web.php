<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class,'index']);

Route::get('/home', [SiteController::class, 'home'])
    ->name('home')
    ->middleware('auth');


    Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function ()
    {
        Route::get('/', [AdminController::class,'index'])->name('index');
        Route::resource('users', [UserController::class]);
    });