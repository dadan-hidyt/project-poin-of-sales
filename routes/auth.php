<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Kasir\Login;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
  Route::get('backoffice', [AuthController::class, 'loginBackend'])->name('.login_backend');
  Route::post('backoffice', [AuthController::class, 'loginBackendCheck'])->name('.login_backend');
  Route::get('kasir/login',Login::class)->name('.login_kasir');
});
