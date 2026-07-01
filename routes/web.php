<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::resource('/user', [UserController::class]);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
