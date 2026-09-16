<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\KnowledgeBaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TimeTrackingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'create'])->name('login');

Route::post('/', [LoginController::class, 'store'])->name('login');

Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/dashboard', [DashboardController::class, 'create'])->middleware('auth')->name('dashboard');

Route::get('/operations', [OperationController::class, 'create'])->middleware('auth')->name('operations');

Route::get('/operations/requests', [RequestController::class, 'create'])->middleware('auth')->name('requests');

Route::get('/operations/requests/new_request', [RequestController::class, 'new_request'])->middleware('auth')->name('new_request');

Route::post('/operations/requests/new_request', [RequestController::class, 'store'])->middleware('auth')->name('new_request');

Route::get('/operations/inventory', [InventoryController::class, 'create'])->middleware('auth')->name('inventory');

Route::get('/operations/inventory/new_cartridge', [InventoryController::class, 'newCartridge'])->middleware('auth')->name('new_cartridge');

Route::post('/operations/inventory/new_cartridge', [InventoryController::class, 'store'])->middleware('auth')->name('new_cartridge');

Route::get('/operations/knowledge_base', [KnowledgeBaseController::class, 'create'])->middleware('auth')->name('knowledge_base');

Route::get('/operations/knowledge_base/new_article', [KnowledgeBaseController::class, 'new_article'])->middleware('auth')->name('new_article');

Route::get('/operations/knowledge_base/new_file', [KnowledgeBaseController::class, 'new_file'])->middleware('auth')->name('new_file');

Route::get('/operations/knowledge_base/download/{id}', [KnowledgeBaseController::class, 'download'])->name('download.file');

Route::post('/operations/knowledge_base/upload', [KnowledgeBaseController::class, 'upload'])->name('upload.file');

Route::get('/opreations/plans', [PlanController::class, 'create'])->middleware('auth')->name('plans');

Route::get('/operations/time_tracking', [TimeTrackingController::class, 'create'])->middleware('auth')->name('time_tracking');

Route::get('/profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');

Route::get('/profile/staff', [StaffController::class, 'create'])->middleware('auth')->name('staff');

Route::get('/profile/accounting_journal', [StaffController::class, 'accounting_journal'])->middleware('auth')->name('accounting_journal');
