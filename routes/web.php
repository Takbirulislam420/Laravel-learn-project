<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', [CustomersController::class, 'index'])->name('customer.index');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

