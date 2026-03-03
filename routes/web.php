<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/task',[TaskController::class,'index'])->name('task.index');
Route::get('task/create',[TaskController::class,'create'])->name('task.create');
Route::get('task/edit/{id}',[TaskController::class,'edit'])->name('task.edit');


// for store data in database
Route::post('/task/store',[TaskController::class,'store'])->name('task.store');
Route::post('/task/update/{id}',[TaskController::class,'update'])->name('task.update');
// for delete data in database
Route::get('/task/delete/{id}',[TaskController::class,'destroy'])->name('task.destroy');