<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', DashboardController::class);
/**
 * rouer untuk autenticate
 */
Route::prefix('auth')->name('auth')->group(base_path('routes/auth.php'));
/**
 * ini adalah bagian dari 
 */
Route::prefix('dashboard')->middleware(['auth',AuthMiddleware::class])->name('dashboard')->group(base_path('routes/backend.php'));