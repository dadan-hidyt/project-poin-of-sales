<?php

use App\Http\Controllers\Backend\Pengaturan\SatuanBarang;
use App\Http\Controllers\Backend\PengaturanController;
use Illuminate\Support\Facades\Route;

//
Route::get('struk', [PengaturanController::class,'struk'])->name('.struk');
Route::get('satuan_barang',[PengaturanController::class,'satuanBarang'])->name('.satuan_barang');
Route::get('satuan_barang/{id}/delete',[SatuanBarang::class,'delete'])->name('.satuan_barang.delete');
Route::post('satuan_barang/tambah',[SatuanBarang::class,'store'])->name('.satuan_barang.store');
Route::get('satuan_barang/tambah',[SatuanBarang::class,'create'])->name('.satuan_barang.tambah');
Route::get('web',[PengaturanController::class,'web'])->name('.web');