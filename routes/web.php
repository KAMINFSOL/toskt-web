<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'create'])->name('login');

Route::post('/', [LogicException::class, 'store'])->name('login');

Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [DashboardController::class, 'create'])->middleware('auth')->name('dashboard');

Route::get('/operations', [OperationController::class, 'create'])->middleware('auth')->name('operations');

Route::get('/profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
