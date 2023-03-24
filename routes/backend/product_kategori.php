<?php

use App\Http\Controllers\Backend\Produk\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/',[KategoriController::class,'index'])->name('.show');