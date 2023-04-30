<?php

namespace App\Http\Livewire;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use function PHPSTORM_META\map;

class Pembayaran extends Component
{
    public $pesanan;

    public $jumlah_bayar;
    protected $listeners = ['refresh_jumlah_bayar'];
    public $bayar;
    public function refresh_jumlah_bayar(){
        $this->jumlah_bayar = $this->jumlah_bayar;
    }
    
    public function bayar(){

        DB::beginTransaction();
        $kode_transaksi = uniqid("TRX-");
        
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
            DetailTransaksi::create($detail);
        }
        $this->pesanan->detail_pesanan()->truncate();
        $this->pesanan->truncate();
        $create_transaksi = Transaksi::create([
            'kode_transaksi' => $kode_transaksi,
            'tanggal_order' => now(),
            'type_order' => "FREE TABLE",
            'id_pelanggan' => $this->pesanan->id_pelanggan == null ? "Noname" : $this->pesanan->id_pelanggan,
            'id_metode_pembayaran' => 1,
            'catatan' => 3,
            'status_pembayaran' => "DIBAYAR",
            'id_kasir' => auth()->user()->id,
            'jumlah' => $this->pesanan->hitungPesanan('grand_total'),
            'jmlh_bayar' => $this->jumlah_bayar,
        ]);
        if($create_transaksi){
            DB::commit();
        } else {
            DB::rollBack();
        }
    }

    public function setUang($jmlh){
        if($jmlh=='pas'){
            $this->jumlah_bayar = $this->pesanan->hitungPesanan('grand_total');
        }else{
            $this->jumlah_bayar = $jmlh;
        }
        $this->emit('refresh_jumlah_bayar');
    }

    public function render()
    {
        return view('livewire.pembayaran');
    }
}
