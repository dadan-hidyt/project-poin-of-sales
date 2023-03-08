<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
/**
 * rouer untuk autenticate
 */
Route::prefix('auth')->name('auth')->group(base_path('routes/auth.php'));
/**
 * ini adalah bagian dari 
 */
Route::prefix('dashboard')->name('dashboard')->group(base_path('routes/backend.php'));