<?php

namespace App\Http\Controllers\Kasir;
use PDF;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class POSController extends Controller
{
    //kode pesanan
    public function pos($kode_pesanan = null)
    {
        $pesanan = Pesanan::with(['meja', 'pelanggan', 'detail_pesanan.produk'])->where(['kode_pesanan' => $kode_pesanan,'id_kasir'=> auth()->user()->getKasir()->id])->first();
        abort_if($pesanan === null, 404);
        $this->setTitle("POS");
        return view('kasir.pos', compact('pesanan'));
    }
    //proses bayar
    public function prosesBayar($kode_pesanan)
    {
        $this->setTitle("Proses Bayar");
        $metode = request()->metode;
        $pesanan = Pesanan::with(['meja', 'pelanggan', 'detail_pesanan.produk'])->where(['kode_pesanan' => $kode_pesanan,'id_kasir'=>auth()->user()->getKasir()->id])->first();
        if (!$pesanan) {
            return redirect()->back();
        }
        return view("kasir.bayar", compact('pesanan', 'metode'));
    }
    public function cetakStruk($kode_transaksi)
    {
        $transaksi = Transaksi::where('kode_transaksi', $kode_transaksi)->first();
        abort_if($transaksi === null, 404);
        $Pdf = PDF::loadView('kasir.transaksi.cetak_struk', compact('transaksi'));
        return $Pdf->stream();
    }
}
