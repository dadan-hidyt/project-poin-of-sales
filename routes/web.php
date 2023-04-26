<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth')->group(base_path('routes/auth.php'));
/**
 * Group router for dashboard backend
 */
Route::middleware(['auth',AuthMiddleware::class])->group(function(){
    Route::get('/', DashboardController::class);
    Route::prefix('dashboard')->middleware(['auth',AuthMiddleware::class])->name('dashboard')->group(base_path('routes/backend.php'));
});

