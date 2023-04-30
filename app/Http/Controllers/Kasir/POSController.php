<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class POSController extends Controller
{
    public function pos($kode_pesanan = null){


        $pesanan = Pesanan::with(['meja','pelanggan','detail_pesanan.produk'])->where(['kode_pesanan'=>$kode_pesanan])->first();

        $this->setTitle("POS");
        return view('kasir.pos', compact('pesanan'));
    }

    public function prosesBayar($kode_pesanan){
        $metode = request()->metode;
        $pesanan = Pesanan::with(['meja','pelanggan','detail_pesanan.produk'])->where(['kode_pesanan'=>$kode_pesanan])->first();
        return view("kasir.bayar", compact('pesanan','metode'));
    }
}
