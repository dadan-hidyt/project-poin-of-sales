<?php
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('/',[DashboardController::class,'index'])->name('.index');
Route::prefix('/produk')->name('.product')->group(base_path('routes/backend/product.php'));
Route::prefix('/produk/kategori')->name('.product.kategori')->group(base_path('routes/backend/product_kategori.php'));
Route::prefix('/pelanggan')->name('.pelanggan')->group(base_path('routes/backend/pelanggan.php'));
Route::prefix('/produk/varian')->name('.varian')->group(base_path('routes/backend/product_variant.php'));
Route::prefix('/promo')->name('.promo')->group(base_path('routes/backend/promo.php'));
