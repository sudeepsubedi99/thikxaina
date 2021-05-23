<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Product;

Route::get('/', [SiteController::class, 'index']);
Route::get('/product', [SiteController::class, 'show']);
Route::middleware('auth')->group(function () {
    Route::get('/home', [SiteController::class, 'home']);


    
    Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

        Route::get('/', [AdminController::class, 'index'])->name('index');

        Route::resource('users', UserController::class);
        Route::resource('categories', CategoryController::class);


        Route::get('products/{product}/images', [ProductController::class, 'images'])
                ->name('products.images');
        Route::post('products/{product}/images', [ProductController::class, 'uploadImages'] );
        Route::delete('product/{product}/images', [ProductController::class, 'removeImage'])
            ->name('product.images.removeImage');

        Route::resource('products', ProductController::class);
    });
});
