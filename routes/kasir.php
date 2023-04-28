<?php

use App\Http\Controllers\Kasir\HomeController;
use App\Http\Controllers\Kasir\POSController;
use Illuminate\Support\Facades\Route;

Route::get('home',HomeController::class)->name('.index');
Route::get('tutup-kasir', [HomeController::class, 'TutupKasir'])->name('.tutup_kasir');
Route::get('pos/{kode_pesanan}', [POSController::class,'pos'])->name('.pos');