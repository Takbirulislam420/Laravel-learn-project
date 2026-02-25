<?php

use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/features', function () {
    return view('home');
})->name('features');
Route::get('/pricing', function () {
    return view('home');
})->name('pricing');

Route::get('/test', [TextController::class, 'myDemoFunction']);
Route::get('/returnInteger', [TextController::class, 'returnInteger']);
Route::get('/contact', [TextController::class, 'index']);
Route::get('/returnJson', [TextController::class, 'returnJson']);
Route::get('/getIp', [TextController::class, 'getIp'])->name('get-ip');

Route::post('/getUserData', [TextController::class, 'getUserData'])->name('get-user-data');
