<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');