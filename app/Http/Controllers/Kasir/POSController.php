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
        $pesanan = Pesanan::with(['meja', 'pelanggan', 'detail_pesanan.produk',])->where(['kode_pesanan' => $kode_pesanan, 'id_kasir' => auth()->user()->getKasir()->id])->first();
        if (is_null($pesanan)) {
            return redirect()->route('kasir.index');
        }
        $this->setTitle("POS");
        return view('kasir.pos', compact('pesanan'));
    }
    //proses bayar
    public function prosesBayar($kode_pesanan)
    {
        $this->setTitle("Proses Bayar");
        $metode = request()->metode ?? 'cash';
        $pesanan = Pesanan::with(['meja', 'pelanggan', 'detail_pesanan.produk'])->where(['kode_pesanan' => $kode_pesanan, 'id_kasir' => auth()->user()->getKasir()->id])->first();
        $semuaPesanan = Pesanan::with(['meja'])->where('kode_pesanan', '!=', $kode_pesanan)->get();

        if (!$pesanan) {
            return redirect()->back();
        }

        return view("kasir.bayar", compact('pesanan', 'metode', 'semuaPesanan'));
    }
    public function cetakStruk($kode_transaksi)
    {
        $transaksi = Transaksi::where('kode_transaksi', $kode_transaksi)->first();
        abort_if($transaksi === null, 404);
        abort_if(!$transaksi, 404);
        $Pdf = PDF::loadView('kasir.transaksi.cetak_struk', compact('transaksi'));
        return $Pdf->stream();
    }

    public function gabungMeja(Request $request, $kode_pesanan)
    {
        $pesanan = Pesanan::where('kode_pesanan', $kode_pesanan)->first();

        foreach ($request->input('pesanan') as $item) {

            $pesananTerpilih = Pesanan::with('detail_pesanan.produk')->where('kode_pesanan', $item)->first();

            foreach ($pesananTerpilih->detail_pesanan as $item) {

                $item->id_pesanan = $pesanan->id;
                $item->save();
            }

            $pesananTerpilih->delete();
        }

        return back()->with('success', 'Pesanan berhasil digabungkan.');
    }
}
