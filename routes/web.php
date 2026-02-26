<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
// Route::post('/login', [LoginController::class, 'loginUser'])->name('login.authenticate');

Route::middleware('guest.redirect')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('registerUser');
    Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');
});

Route::middleware('check.user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logoutUser'])->name('logout');
    Route::get('/user', function(){
        return view('userdata');
    })->name('userdata');
});
