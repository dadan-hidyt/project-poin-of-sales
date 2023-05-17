<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PoinRewardController;

Route::get('/daftar-poin', [PoinRewardController::class, 'view'])->name('.tampil');
Route::get('/total-pembelian', [PoinRewardController::class, 'index'])->name('.pembelian');
Route::get('/reward-produk', [PoinRewardController::class, 'rewardProduk'])->name('.produk');
