<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PoinRewardController;
use App\Models\PoinRewardProduk;

Route::get('/daftar-poin', [PoinRewardController::class, 'view'])->name('.tampil');
Route::get('/reward-pembelian/{id}/delete', [PoinRewardController::class, 'deletePoinRewardPembelian'])->name('.pembelian.delete');
Route::get('/total-pembelian', [PoinRewardController::class, 'index'])->name('.pembelian');
Route::get('/reward-produk', [PoinRewardController::class, 'rewardProduk'])->name('.produk');
Route::get('/pengaturan-reward', [PoinRewardController::class, 'setting'])->name('.setting');
