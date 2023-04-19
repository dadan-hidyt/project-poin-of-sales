<?php

use App\Http\Controllers\Backend\AkunController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KariawanController;
use App\Http\Controllers\Backend\MejaController;
use App\Http\Controllers\Backend\Produk\ProdukVarian;
use App\Models\Kariawan;
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('/',DashboardController::class)->name('.index');
Route::prefix('/produk')->name('.product')->group(base_path('routes/backend/product.php'));
Route::prefix('/produk/kategori')->name('.product.kategori')->group(base_path('routes/backend/product_kategori.php'));
Route::prefix('/pelanggan')->name('.pelanggan')->group(base_path('routes/backend/pelanggan.php'));
Route::resource('produk/varian', ProdukVarian::class,[
    'names' => [
        'index' => '.produk.varian',
        'store' => '.produk.varian.store',
        'edit' => '.akun.varian.edit',
        'destroy' => '.akun.varian.delete'
    ]
]);
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
Route::resource('meja', MejaController::class,[
   'names' => [
    'index' => '.meja.index',
    'store' => '.meja.store',
    'create' => '.meja.create',
    'edit' => '.meja.edit',
    'destroy' => '.meja.destroy'
   ]
]);
Route::get('meja/data/get', [MejaController::class, 'datatable'])->name('.meja.datatable');
Route::prefix('akun_saya')->name('.akun_saya')->group(base_path('routes/backend/akun_saya.php'));
Route::prefix('pengaturan')->name('.pengaturan')->group(base_path('routes/backend/pengaturan.php'));