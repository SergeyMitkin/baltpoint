<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome')->name('welcome');
//});
Route::get('/', [ProductController::class, 'index'])->name('index');

Route::prefix('/product')->name('product.')->group(function () {
    Route::get('/', function () { return redirect()->route('index'); });
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::post('/{product}/delete', [ProductController::class, 'delete'])->name('delete');
});

Route::prefix('/brand')->name('brand.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/create', [BrandController::class, 'create'])->name('create');
    Route::post('/', [BrandController::class, 'store'])->name('store');
    Route::get('/{brand}/edit', [BrandController::class, 'edit'])->name('edit');
    Route::post('/{brand}/delete', [BrandController::class, 'delete'])->name('delete');
});

//use App\Http\Controllers\MainController;
//use App\Http\Controllers\ProductControllerOld;

//Route::get('/', [MainController::class, 'index'])->name('home');
//
//Route::prefix('/products')->name('products.')->group(function () {
//    Route::get('/', [ProductControllerOld::class, 'index'])->name('index');
//    Route::get('/create', [ProductControllerOld::class, 'create'])->name('create');
//    Route::post('/', [ProductControllerOld::class, 'store'])->name('store');
//    Route::get('/{product}', [ProductControllerOld::class, 'show'])->name('show');
//    Route::get('/{product}/edit', [ProductControllerOld::class, 'edit'])->name('edit');
//});

