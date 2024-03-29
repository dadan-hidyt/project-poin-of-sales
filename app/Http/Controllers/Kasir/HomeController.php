<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\HistoryPengeluaranKasir;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\Transaksi;
use App\Models\Refund;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//class home controller
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
        $kasir_id = auth()->user()->getKasir()->id ?? null;
        return view('kasir.transaksi.all', ['transaksi' => Transaksi::where('id_kasir', $kasir_id)->get()]);
    }
    public function create_laporan_kasir(){
        $kasir_id = auth()->user()->getKasir()->id ?? null;
        $trx = Transaksi::where('id_kasir', $kasir_id)->get();
        $peng = 0;
        $peng_bersih = 0;
        foreach ($trx as $tr) {
            $peng += $tr->jumlah;
            if ($tr->detailTransaksi) {
                foreach ($tr->detailTransaksi as $trs) {
                    $peng_bersih += $trs->produk->harga_modal;
                }
            }
        }
        $trx = Transaksi::where('id_kasir', $kasir_id)->get();
        return PDF::loadView('kasir.laporan_penjualan_download',[
            'byMetode' => $this->penghasilanByMetodePembayaran(),
            'total_transaksi' => $trx->count(),
            'peng' => $peng,
        ])->download('laporan.pdf');
    }
    public function refundTrans()
    {
        $this->setTitle('Transaksi Refund');
        $kasir_id = auth()->user()->getKasir()->id ?? null;
        abort_if(is_null($kasir_id), 403);
        return view('kasir.transaksi.refund', [
            'refund' => Refund::with('transaksi', 'user')->where('id_kasir', $kasir_id)->get(),
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
        $kasir_id = auth()->user()->getKasir()->id;
        $pesanan = Pesanan::where(['id_kasir' => $kasir_id])->get();
        return view('kasir.transaksi.belum-bayar', compact('pesanan'));
    }
    public function penghasilanByMetodePembayaran()
    {
        $id_kasir = auth()->user()->getKasir()->id;
        $cash = formatRupiah(Transaksi::where(['metode_pembayaran' => 'cash', 'id_kasir' => $id_kasir])->sum('jumlah'));
        $ewalet = formatRupiah(Transaksi::where(['metode_pembayaran' => 'ewalet', 'id_kasir' => $id_kasir])->sum('jumlah'));
        $debit = formatRupiah(Transaksi::where(['metode_pembayaran' => 'debit', 'id_kasir' => $id_kasir])->sum('jumlah'));
        return compact('cash', 'ewalet', 'debit');
    }
    public function laporanPenjualan()
    {
        //laporan
        $kasir_id = auth()->user()->getKasir()->id;
        $trx = Transaksi::where('id_kasir', $kasir_id)->get();
        $peng = 0;
        $peng_bersih = 0;
        foreach ($trx as $tr) {
            $peng += $tr->jumlah;
            if ($tr->detailTransaksi) {
                foreach ($tr->detailTransaksi as $trs) {
                    $peng_bersih += $trs->produk->harga_modal;
                }
            }
        }

        $kas = auth()->user()->getkasir()->kas_awal ?? 0;
        $sisa_kas = auth()->user()->getkasir()->sisa_kas ?? 0;

        $belumBayar = Pesanan::where(['id_kasir' => $kasir_id])->count();
        $this->setTitle('Laporan Penjualan');
        return view('kasir.laporan-penjualan', [
            'kas' => $kas,
            'sisa_kas' => $sisa_kas,
            'penghasilan_bersih' => $peng_bersih,
            'total_transaksi' => $trx->count(),
            'penghasilan' => $peng,
            'byMetodePembayaran' => $this->penghasilanByMetodePembayaran(),
            'belum_bayar' => $belumBayar,
            'pelanggan' => Pelanggan::count(),
            'history_penjualan' => HistoryPengeluaranKasir::where('id_kasir', $kasir_id)->get(),

        ]);
    }

    public function daftarPelanggan()
    {
        $this->setTitle('Daftar Pelanggan');

        return view('kasir.daftar-pelanggan', [
            'pelanggan' => Pelanggan::all(),
        ]);
    }


    public function takeAway()
    {
        $this->setTitle('Pesanan TakeAway');
        $kasir_id = auth()->user()->getKasir()->id;
        $pesanan = Transaksi::where(['id_kasir' => $kasir_id,'type_order'=>'take_away'])->get();
        return view('kasir.take-away',compact('pesanan'));
    }
}
