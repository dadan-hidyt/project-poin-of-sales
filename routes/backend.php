<?php

use App\Http\Controllers\Backend\AkunController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KariawanController;
use App\Http\Controllers\Backend\LaporanController;
use App\Http\Controllers\Backend\LaporanKasirController;
use App\Http\Controllers\Backend\LaporanProdukController;
use App\Http\Controllers\Backend\MejaController;
use App\Http\Controllers\Backend\Produk\ProdukVarian;
use App\Http\Controllers\LaporanBulananController;
use App\Models\Kariawan;
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('logout', function(){
    Auth::logout();
    return redirect()->route('auth.login_backend');
})->name('.logout');
Route::get('/',DashboardController::class)->name('.index');
Route::prefix('/produk')->name('.product')->group(base_path('routes/backend/product.php'));
Route::prefix('/produk/kategori')->name('.product.kategori')->group(base_path('routes/backend/product_kategori.php'));
Route::prefix('/pelanggan')->name('.pelanggan')->group(base_path('routes/backend/pelanggan.php'));
Route::resource('produk/varian', ProdukVarian::class,[
    'names' => [
        'index' => '.produk.varian',
        'edit' => '.produk.varian.edit',
        'create' => '.produk.varian.tambah',
    ]
])->only(['index','create','edit']);
Route::get('produk/varian/{id}/delete', [ProdukVarian::class,'destroy'])->name('.produk.varian.delete');
Route::get('produk/data/get', [ProdukVarian::class, 'datatable'])->name('.produk.varian.datatable');
/** PROMO */
Route::prefix('/promo')->name('.promo')->group(base_path('routes/backend/promo.php'));
/** KARIAWAN */
Route::resource('kariawan',KariawanController::class);
Route::resource('akun',AkunController::class,[
    'names' => [
        'index' => '.akun.index',
        'store' => '.akun.store',
        'edit' => '.akun.edit',
        'destroy' => '.akun.delete'
    ]
]);
/** MEJA */
Route::resource('meja', MejaController::class,[
   'names' => [
    'index' => '.meja.index',
    'store' => '.meja.store',
    'create' => '.meja.create',
    'edit' => '.meja.edit',
   ]
])->only(['index','store','edit','create']);
Route::get('meja/data/get', [MejaController::class, 'datatable'])->name('.meja.datatable');
Route::get('meja/{id}/delete', [MejaController::class, 'destroy'])->name('.meja.delete');
//akun saya
Route::prefix('akun_saya')->name('.akun_saya')->group(base_path('routes/backend/akun_saya.php'));
Route::prefix('pengaturan')->name('.pengaturan')->group(base_path('routes/backend/pengaturan.php'));
Route::prefix('laporan')->name('.laporan')->group(function(){
    Route::get("kasir", [LaporanKasirController::class,'kasir'])->name('.kasir');
    Route::get('kasir/{id}/print', [LaporanKasirController::class, 'print'])->name('.kasir.print');


    //laporan bulanan
    
    Route::get('bulanan', LaporanBulananController::class)->name('.bulanan');
    Route::get('bulanan/chart', [LaporanBulananController::class,'getAjaxChart'])->name('.bulanan.chart');


    //laporan Produk
    Route::get('produk', LaporanProdukController::class)->name('.produk');
    Route::post('produk/get_record', [LaporanProdukController::class,'datatableAjax'])->name('.produk.datatable');
});