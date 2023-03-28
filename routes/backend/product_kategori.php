<?php

use App\Http\Controllers\Backend\Produk\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/',[KategoriController::class,'index']);
Route::post('/datatable',[KategoriController::class,'datatable'])->name('.datatable');
Route::get('/kategori/{id_kategori?}/delete',[KategoriController::class,'delete'])->name('.delete');
Route::get('/kategori/{id_kategori?}/update',[KategoriController::class,'update'])->name('.update');