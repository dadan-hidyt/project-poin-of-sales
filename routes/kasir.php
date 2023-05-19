<?php

use App\Http\Controllers\Kasir\HomeController;
use App\Http\Controllers\Kasir\LaporanPenjualan;
use App\Http\Controllers\Kasir\POSController;
use App\Http\Controllers\kasir\RefundController;
use App\Http\Controllers\KichenController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('home', HomeController::class)->name('.index');
Route::get('tutup-kasir', [HomeController::class, 'TutupKasir'])->name('.tutup_kasir');

Route::get('kichen', KichenController::class)->name('.kichen');

Route::get('transaksi/semua', [HomeController::class, 'allTrans'])->name('.all_transaktion');
Route::get('transaksi/refund', [HomeController::class, 'refundTrans'])->name('.refund_transaktion');
Route::get('transaksi/void', [HomeController::class, 'voidTrans'])->name('.void_transaktion');
Route::get('transaksi/belum-bayar', [HomeController::class, 'belumBayar'])->name('.belum_bayar');

Route::get('laporan-penjualan', [HomeController::class, 'laporanPenjualan'])->name('.laporan_penjualan');

Route::get('daftar-pelanggan', [HomeController::class, 'daftarPelanggan'])->name('.daftar_pelanggan');



Route::get('pos/{kode_pesanan}', [POSController::class, 'pos'])->name('.pos');
Route::get('pos/{kode_pesanan}/bayar', [POSController::class, 'prosesBayar'])->name('.pesanan.bayar');
Route::get('pos/trans/{kode_transaksi}/cetakstruk', [POSController::class, 'cetakStruk'])->name('.cetak_struk');

Route::post('pos/{kode_pesanan}/gabung-meja', [POSController::class, 'gabungMeja'])->name('.gabung_meja');

Route::get('pos/{id_transaksi}/refund', [RefundController::class, 'refund'])->name('.refund');

Route::get('fetch/laporan/uang_keluar', [LaporanPenjualan::class, 'pengeluaran'])->name('.laporan.pengeluaran');
Route::get('fetch/laporan/data_kas', [LaporanPenjualan::class, 'dana_kas'])->name('.laporan.dana_kas');

Route::get('logout_kasir', function () {
    Auth::logout();
    return redirect(route('auth.login_kasir'));
})->name('.logout');
