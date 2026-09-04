<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'create'])->name('login');

Route::post('/', [LogicException::class, 'store'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'create'])->middleware('auth')->name('dashboard');
