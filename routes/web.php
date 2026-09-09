<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'create'])->name('login');

Route::post('/', [LoginController::class, 'store'])->name('login');

Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/dashboard', [DashboardController::class, 'create'])->middleware('auth')->name('dashboard');

Route::get('/operations', [OperationController::class, 'create'])->middleware('auth')->name('operations');

Route::get('/operation/requests', [RequestController::class, 'create'])->middleware('auth')->name('requests');

Route::get('/profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
