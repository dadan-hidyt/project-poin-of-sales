<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Refund;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function TutupKasir()
    {
        $this->setTitle('Tutup Kasir');
        return view('kasir.transaksi.tutup-kasir', [
            'kasir' => auth()->user()->getKasir(),
        ]);
    }
    public function __invoke()
    {
        return view('kasir.home');
    }

    public function allTrans()
    {
        $this->setTitle('Semua Transaksi');
        $kasir_id = auth()->user()->getKasir()->id;
        return view('kasir.transaksi.all', ['transaksi' => Transaksi::where('id_kasir', $kasir_id)->get()]);
    }
    public function refundTrans()
    {
        $this->setTitle('Transaksi Refund');
        return view('kasir.transaksi.refund',[
            'refund' => Refund::with('transaksi')->where('id_kasir',auth()->user()->getKasir()->id)->get(),
        ]);
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
        //laporan
        $kasir_id = auth()->user()->getKasir()->id;
        $trx = Transaksi::where('id_kasir', $kasir_id)->get();
        $peng = 0;
        foreach ($trx as $tr) {
            $peng += $tr->jumlah;
        }

        $kas = auth()->user()->getkasir()->kas_awal ?? 0;

        $this->setTitle('Laporan Penjualan');
        return view('kasir.laporan-penjualan', [
            'kas' => $kas,
            'total_transaksi' => $trx->count(),
            'penghasilan' => $peng,
        ]);
    }

    public function daftarPelanggan()
    {
        $this->setTitle('Daftar Pelanggan');

        return view('kasir.daftar-pelanggan');
    }
}
