<?php

use App\Http\Controllers\Backend\AkunController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KariawanController;
use App\Models\Kariawan;
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('/',DashboardController::class)->name('.index');
Route::prefix('/produk')->name('.product')->group(base_path('routes/backend/product.php'));
Route::prefix('/produk/kategori')->name('.product.kategori')->group(base_path('routes/backend/product_kategori.php'));
Route::prefix('/pelanggan')->name('.pelanggan')->group(base_path('routes/backend/pelanggan.php'));
Route::prefix('/produk/varian')->name('.varian')->group(base_path('routes/backend/product_variant.php'));
Route::prefix('/promo')->name('.promo')->group(base_path('routes/backend/promo.php'));
//kariawan
Route::resource('kariawan',KariawanController::class);
Route::resource('akun',AkunController::class,[
    'names' => [
        'index' => '.akun.index',
        'store' => '.akun.store',
        'edit' => '.akun.edit',
        'destroy' => '.akun.delete'
    ]
]);

Route::prefix('akun_saya')->name('.akun_saya')->group(base_path('routes/backend/akun_saya.php'));