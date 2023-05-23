<?php

namespace App\Http\Livewire;

use App\Models\DetailTransaksi;
use App\Models\PengaturanPoinReward;
use App\Models\PoinRewardPembelian;
use App\Models\Product;
use App\Models\Transaksi;
use Carbon\Carbon;
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
    public $potongan = 0;
    public $kembalian = null;
    public $metode = 'cash';
    public function getPotonganHarga()
    {
        //cek apakah pelanggan punya 
        if ($this->pesanan->pelanggan && $this->pesanan->jenis_reward == 'pembelian') {
            $pelanggan = $this->pesanan->pelanggan;
            $potongan = ($pelanggan->poin / 1) * PengaturanPoinReward::first()->potongan_per_10_poin ?? 1000;
            if ( $potongan <= $this->pesanan->hitungPesanan('subtotal') - 3000 ) {
                $potongan = $potongan;
            } else {
                $potongan = 0;
            }
        } else {
            $potongan = 0;
        }
        
        return $potongan + $this->pesanan->jumlah_potongan_voucher ?? 0;
    }
    public function refresh_jumlah_bayar()
    {
        $this->potongan = $this->getPotonganHarga();
        $this->jumlah_bayar = $this->jumlah_bayar;
        $total = $this->pesanan->hitungPesanan('subtotal') + $this->pesanan->hitungPesanan('pajak');
        if ($total != $this->jumlah_bayar) {
            $this->kembalian = $this->jumlah_bayar - ($total - $this->potongan);
        } else {
            $this->kembalian = 0;
        }
    }
    public function mount()
    {
        $this->potongan = $this->getPotonganHarga();
    }
    public function updated()
    {
        $this->jumlah_bayar = $this->jumlah_bayar;
    }
    public function claimPoinPembelian()
    {
        $total_pembelian = $this->pesanan->hitungPesanan('subtotal');
        if ($jenis_reward = $this->pesanan->jenis_reward) {
            switch ($jenis_reward) {
                case 'pembelian':
                    $reward = PoinRewardPembelian::all()->filter(function ($item) use ($total_pembelian) {
                        if (Carbon::now()->between($item->tanggal_mulai, $item->tanggal_berakhir) && $total_pembelian >= $item->min_pembelian && $item->status = 'Y') {
                            return $item;
                        }
                    });
                    $poin = 0;
                    foreach ($reward as $item) {
                        $poin += $item->jumlah_poin;
                    }
                    if ($pelanggan = $this->pesanan->pelanggan) {
                        $pelanggan->poin += $poin;
                        $pelanggan->save();
                    }
                    return $reward;
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
    public function bayar()
    {
        $potongan_harga = $this->getPotonganHarga();
        if (!$this->jumlah_bayar) {
            $this->dispatchBrowserEvent('nominal_kosong');
        } else {
            $id_kasir = auth()->user()->getKasir()->id;
            $kode_transaksi = uniqid("TRX-");
            DB::beginTransaction();
            foreach ($this->pesanan->detail_pesanan as $pesanan) {
                $total_pajak = $pesanan->produk->harga_jual * ($pesanan->produk->pajak / 100);
                $subtotal = ($pesanan->produk->harga_jual * $pesanan->qty);
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

                $reward = $this->claimPoinPembelian();
                $create_transaksi = DB::table('tb_transaksi')->insert([
                    'kode_transaksi' => $kode_transaksi,
                    'tanggal_order' => now(),
                    'type_order' => $this->pesanan->type ?? 'Free Table',
                    'id_pelanggan' => $this->pesanan->id_pelanggan == null ? NULL : $this->pesanan->id_pelanggan,
                    'id_metode_pembayaran' => 1,
                    'total_pajak' => $this->pesanan->hitungPesanan('pajak'),
                    'catatan' => null,
                    'reward_pembelian' => $reward,
                    'status_pembayaran' => "DIBAYAR",
                    'id_kasir' => $id_kasir,
                    'jumlah_sebelum_potongan' => $this->pesanan->hitungPesanan('subtotal'),
                    'jumlah' => ($this->pesanan->hitungPesanan('subtotal') - $potongan_harga),
                    'potongan' => $potongan_harga,
                    'jmlh_bayar' => $this->jumlah_bayar,
                    'metode_pembayaran' => $this->metode,
                ]);
                DB::commit();
                $this->pesanan->detail_pesanan()->truncate();
                $this->pesanan->delete();
                session()->flash('pembayaran_berhasil', "Pembayaran berhasil!! Silahkan tunggu untuk mencetak struk");
                return redirect()->route('kasir.cetak_struk', $kode_transaksi);
            } catch (PDOException $th) {
                DB::rollBack();
                throw $th;
            }
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
