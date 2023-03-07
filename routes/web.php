<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
/**
 * rouer untuk autenticate
 */
Route::prefix('auth')->name('auth')->group(base_path('routes/auth.php'));
Route::get('/',function(){
    return view('backend.dashboard.index');
});