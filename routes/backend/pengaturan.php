<?php

use App\Http\Controllers\Backend\PengaturanController;
use Illuminate\Support\Facades\Route;
//
Route::get('struk', [PengaturanController::class,'struk'])->name('.struk');
Route::get('satuan_barang',[PengaturanController::class,'satuanBarang'])->name('.satuan_barang');
