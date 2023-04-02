<?php

use App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\MainController;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin');
//---> CATEGORY
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
//---> TAGS
    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
        Route::get('/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
        Route::patch('/{tag}', [TagController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}', [TagController::class, 'destroy'])->name('admin.tag.destroy');
    });
    //---> COLORS
    Route::group(['prefix' => 'colors'], function () {
        Route::get('/', [ColorController::class, 'index'])->name('admin.color.index');
        Route::get('/create', [ColorController::class, 'create'])->name('admin.color.create');
        Route::post('/', [ColorController::class, 'store'])->name('admin.color.store');
        Route::get('/{color}', [ColorController::class, 'show'])->name('admin.color.show');
        Route::get('/{color}/edit', [ColorController::class, 'edit'])->name('admin.color.edit');
        Route::patch('/{color}', [ColorController::class, 'update'])->name('admin.color.update');
        Route::delete('/{color}', [ColorController::class, 'destroy'])->name('admin.color.destroy');
    });
    //---> USERS
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
    //---> PRODUCTS
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/{product}', [ProductController::class, 'show'])->name('admin.product.show');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::patch('/{product}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });

});

Auth::routes();
