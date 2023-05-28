<?php

namespace App\Http\Livewire;

use App\Models\DetailPesanan;
use App\Models\KategoriProduk;
use App\Models\Pesanan;
use App\Models\Product;
use Livewire\Component;
use App\Models\Kupon;
use App\Models\PoinRewardPembelian;
use Carbon\Carbon;

class Pos extends Component
{
    public $kategori;

    public $product;

    public $search_term;

    public $kode_voucher = null;

    public $detail_produk;

    public $pesanan;

    public $reward = [];

    public $rewards;

    protected $listeners = ['refreshComponent', 'clearDetailPesanan'];

    public $transaksi = [];

    public $item_pesanan;

    public $is_reward = false;

    public function refreshComponent()
    {
        $this->pesanan = $this->pesanan;
    }
    public function reward()
    {
        if ($this->reward['type'] ?? false) {
            $this->pesanan->update(['jenis_reward' => $this->reward['type'] ?? null]);
            $this->emit('refreshComponent');
            $this->is_reward = true;
            $this->dispatchBrowserEvent('reward_berhasil_di_set');
        }
    }
    public function filterKategori($kategori)
    {
        $this->product = Product::where(['id_kategori_produk'=>$kategori])->get();
        $this->emit('refreshComponent');
    }
    public function setKodeVoucher()
    {
        //get Kupon
        $kupon = Kupon::where('kode_kupon', $this->kode_voucher)->where('jumlah_sisa', '>', 0)->first();
        if ($kupon) {
            Pesanan::find($this->pesanan->id)->update(['kode_voucher' => $this->kode_voucher, 'jumlah_potongan_voucher' => $kupon->jumlah_potongan]);
            $this->emit('refreaahComponent');
        } else {
            $this->dispatchBrowserEvent('voucher_tidak_ditemukan');
        }
    }
    public function updated()
    {
        if ($this->search_term != null) {
            $product = Product::with(['kategori', 'varian'])->where('nama_produk', "like", '%' . $this->search_term . '%')->get();
            if ($product) {
                $this->product = $product;
            }
        } else {
            $this->getAllProduct();
        }
    }

    public function transaksiBayar()
    {
        dd($this->pesanan);
    }

    protected function getAllProduct()
    {
        $this->product = Product::with(['kategori', 'varian'])->get();
    }
    public function mount()
    {

        if ($this->pesanan->kode_voucher) {
            $this->kode_voucher = $this->pesanan->kode_voucher;
        }
        $this->getAllProduct();
    }
    public function _getCategory()
    {
        if ($data = KategoriProduk::all()) {
            $this->kategori = $data;
        }
    }
    public function simpanItemPesanan($id_produk)
    {
        $this->item_pesanan['id_produk'] = $id_produk;
        $this->item_pesanan['id_pesanan'] = $this->pesanan->id;

        if (!isset($this->item_pesanan['qty'])) {
            $this->item_pesanan['qty'] = 1;
        }
        //varian 
        $varian = $this->item_pesanan['varian'] ?? null;
        //unset varian agar tidak masuk db
        unset($this->item_pesanan['varian']);
        $psanan = DetailPesanan::where(['id_produk' => $id_produk, 'id_pesanan' => $this->pesanan->id]);
        if ($psanan->first()) {
            $this->dispatchBrowserEvent('produk_sudah_ada');
        } else {
            if ($detail_pesanan = DetailPesanan::create($this->item_pesanan)) {
                if($varian){
                    $detail_pesanan->varian()->sync($varian);
                }
                $this->item_pesanan = [];
                $this->dispatchBrowserEvent("produk_berhasil_di_tambahkan", $id_produk);
            }
        }
    }
    public function hapusDetailPesanan($id = null)
    {
        $a = DetailPesanan::where(['id' => $id, 'id_pesanan' => $this->pesanan->id])->first();
        $a->varian()->detach($id);
        if ($a->delete()) {
            $this->dispatchBrowserEvent("delete_detail_pesanan_berhasil", $id);
        } else {
            $this->dispatchBrowserEvent("delete_detail_pesanan_gagal", $id);
        }
    }
    public function clearDetailPesanan()
    {
        foreach ($this->pesanan->detail_pesanan()->varian()->get() as  $value) {
            dd($value);
        }
        if ($this->pesanan->detail_pesanan()->truncate()) {
            $this->emit('refreshComponent');
            $this->dispatchBrowserEvent("detail_pesanan_di_bersihkan");
        }
    }
    public function render()
    {
        return view('livewire.pos');
    }
}
