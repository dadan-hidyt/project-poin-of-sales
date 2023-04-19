<?php
use App\Http\Controllers\Backend\Produk\ProductController;
use App\Http\Controllers\Backend\Produk\KategoriController;
use App\Http\Controllers\Backend\Produk\VarianController;
use Illuminate\Support\Facades\Route;

Route::prefix('/item')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('.item');
    Route::get('/tambah', [ProductController::class,'tambah'])->name('.item.tambah');
    Route::post('/data/get-records', [ProductController::class, 'getDatatables'])->name('.item.datatable');
    Route::get('/get/kategori', [KategoriController::class, 'getAjax'])->name('.item.ajax.kategori');
    Route::get('/get/varian', [VarianController::class, 'getAjax'])->name('.item.ajax.varian');
    Route::get('/{kode_produk?}/delete', [ProductController::class, 'delete'])->name('.item.delete');
    Route::get('/{kode_produk?}/update', [ProductController::class, 'update'])->name('.item.update');
});
