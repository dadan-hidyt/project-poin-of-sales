<?php

use App\Http\Controllers\Backend\Pengaturan\SatuanBarang;
use App\Http\Controllers\Backend\PengaturanController;
use App\Http\Controllers\JenisOrderController;
use App\Models\PengaturanWeb;
use Illuminate\Support\Facades\Route;


Route::prefix('struk')->group(function () {
    Route::get('/view', [PengaturanController::class, 'view'])->name('.struk');
    Route::post('/update', [PengaturanController::class, 'updateStruk'])->name('.updateStruk');
});



Route::get('satuan_barang', [PengaturanController::class, 'satuanBarang'])->name('.satuan_barang');
Route::get('satuan_barang/{id}/delete', [SatuanBarang::class, 'delete'])->name('.satuan_barang.delete');
Route::post('satuan_barang/tambah', [SatuanBarang::class, 'store'])->name('.satuan_barang.store');
Route::get('satuan_barang/tambah', [SatuanBarang::class, 'create'])->name('.satuan_barang.tambah');
Route::get('web', [PengaturanController::class, 'web'])->name('.web');

Route::prefix('jenis-order')->group(function () {
    Route::get('/daftar', [JenisOrderController::class, 'show'])->name('.show');
})->name('jenisorder');


Route::get('pajak', [PengaturanController::class, 'pajak'])->name('.pajak');


// Pembayaran Non Tunai 
Route::prefix('pembayaran-non-tunai')->group(function () {
    Route::get('/daftar', [PengaturanController::class, 'daftarPembayaran'])->name('.daftarTampil');
    Route::get('/tambah', [PengaturanController::class, 'tambahPembayaran'])->name('.tambahTampil');
    Route::post('/tambah', [PengaturanController::class, 'tambahProsess'])->name('.tambahTampil');
    Route::get('/hapus/{id}', [PengaturanController::class, 'hapusPembayaran'])->name('.hapusPembayaran');
})->name('nonTunai');
