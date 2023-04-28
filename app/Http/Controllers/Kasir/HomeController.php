<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function TutupKasir()
    {
        $this->setTitle('Tutup Kasir');
        return view('kasir.transaksi.tutup-kasir');
    }
    public function __invoke()
    {
        return view('kasir.home');
    }

    public function allTrans()
    {
        $this->setTitle('Semua Transaksi');
        return view('kasir.transaksi.all');
    }
    public function refundTrans()
    {
        $this->setTitle('Transaksi Refund');
        return view('kasir.transaksi.refund');
    }
    public function voidTrans()
    {
        $this->setTitle('Transaksi Void');
        return view('kasir.transaksi.void');
    }
    public function belumBayar()
    {
        $this->setTitle('Belum Bayar');
        return view('kasir.transaksi.belum-bayar');
    }

    public function laporanPenjualan()
    {
        $this->setTitle('Laporan Penjualan');
        return view('kasir.laporan-penjualan');
    }

    public function daftarPelanggan()
    {
        $this->setTitle('Daftar Pelanggan');
        return view('kasir.daftar-pelanggan');
    }
}
