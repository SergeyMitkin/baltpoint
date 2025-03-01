<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductControllerOld;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->name('welcome');
});

Route::get('/', [MainController::class, 'index'])->name('home');

Route::prefix('/products')->name('products.')->group(function () {
    Route::get('/', [ProductControllerOld::class, 'index'])->name('index');
    Route::get('/create', [ProductControllerOld::class, 'create'])->name('create');
    Route::post('/', [ProductControllerOld::class, 'store'])->name('store');
    Route::get('/{product}', [ProductControllerOld::class, 'show'])->name('show');
    Route::get('/{product}/edit', [ProductControllerOld::class, 'edit'])->name('edit');
});
