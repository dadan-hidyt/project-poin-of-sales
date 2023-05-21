<?php

namespace App\Http\Livewire;

use App\Models\DetailTransaksi;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use PDOException;


class Pembayaran extends Component
{
    public $pesanan;
    public $semuaPesanan;
    public $jumlah_bayar;
    protected $listeners = ['refresh_jumlah_bayar'];
    public $bayar;
    public $kembalian = null;
    public $metode = 'cash';
    public function refresh_jumlah_bayar()
    {
        $this->jumlah_bayar = $this->jumlah_bayar;
        $total = $this->pesanan->hitungPesanan('subtotal')+$this->pesanan->hitungPesanan('pajak');
        if ( $total != $this->jumlah_bayar ) {
            $this->kembalian = $this->jumlah_bayar - $total;
        } else {
            $this->kembalian = 0;
        }
    }

    public function updated()
    {
        $this->jumlah_bayar = $this->jumlah_bayar;
    }

    public function bayar()
    {
        $id_kasir = auth()->user()->getKasir()->id;
        $kode_transaksi = uniqid("TRX-");
        DB::beginTransaction();
        foreach ($this->pesanan->detail_pesanan as $pesanan) {
            $total_pajak = $pesanan->produk->harga_jual * ($pesanan->produk->pajak / 100);
            $subtotal = $pesanan->produk->harga_jual * $pesanan->qty;
            $detail = [
                'kode_transaksi' => $kode_transaksi,
                'kode_produk' => $pesanan->id_produk,
                'jumlah' => $pesanan->qty,
                'harga' => $pesanan->produk->harga_jual,
                'total_pajak' => $total_pajak,
                'subtotal' => $subtotal,
                'persentase_pajak' => $pesanan->produk->pajak,
                'total' => $total_pajak + $subtotal,
            ];
            DB::table('tb_detail_transaksi')->insert($detail);

            $produk = Product::find($pesanan->id_produk);
            $produk->sisa_stok = ($produk->sisa_stok - $pesanan->qty);
            $produk->save();
        }

        try {
            $create_transaksi = DB::table('tb_transaksi')->insert([
                'kode_transaksi' => $kode_transaksi,
                'tanggal_order' => now(),
                'type_order' => "FREE TABLE",
                'id_pelanggan' => $this->pesanan->id_pelanggan == null ? NULL : $this->pesanan->id_pelanggan,
                'id_metode_pembayaran' => 1,
                'total_pajak' => $this->pesanan->hitungPesanan('pajak'),
                'catatan' => 3,
                'status_pembayaran' => "DIBAYAR",
                'id_kasir' => $id_kasir,
                'jumlah' => $this->pesanan->hitungPesanan('subtotal'),
                'jmlh_bayar' => $this->jumlah_bayar,
                'metode_pembayaran' => $this->metode,
            ]);
            DB::commit();
            $this->pesanan->detail_pesanan()->truncate();
            $this->pesanan->delete();
            return redirect()->route('kasir.cetak_struk', $kode_transaksi);
        } catch (PDOException $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function setUang($jmlh)
    {
        if ($jmlh == 'pas') {
            $this->jumlah_bayar = $this->pesanan->hitungPesanan('grand_total');
        } else {
            $this->jumlah_bayar = $jmlh;
        }
        $this->emit('refresh_jumlah_bayar');
    }
  
    public function render()
    {
        return view('livewire.pembayaran');
    }
}
