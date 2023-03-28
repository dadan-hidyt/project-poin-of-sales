<?php

use App\Http\Controllers\Backend\Produk\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/',[KategoriController::class,'index']);
Route::post('/datatable',[KategoriController::class,'datatable'])->name('.datatable');
Route::get('/{id_kategori?}/delete',[KategoriController::class,'delete'])->name('.delete');
Route::get('/{id_kategori?}/edit',[KategoriController::class,'edit'])->name('.update');
Route::post('/{id_kategori?}/edit',[KategoriController::class,'update'])->name('.update');
