<?php
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('/',[DashboardController::class,'index'])->name('.index');
#product
Route::prefix('/produk')->name('.product')->group(base_path('routes/backend/product.php'));
#kategori
Route::prefix('/produk/kategori')->name('.product.kategori')->group(base_path('routes/backend/product_kategori.php'));
Route::prefix('/pelanggan')->name('.pelanggan')->group(base_path('routes/backend/pelanggan.php'));