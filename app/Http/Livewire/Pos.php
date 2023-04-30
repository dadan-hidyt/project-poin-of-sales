<?php

namespace App\Http\Livewire;

use App\Models\DetailPesanan;
use App\Models\KategoriProduk;
use App\Models\Pesanan;
use App\Models\Product;
use Livewire\Component;

class Pos extends Component
{
    public $kategori;

    public $product;

    public $search_term;

    public $detail_produk;

    public $pesanan;

    protected $listeners = ['refreshComponent','clearDetailPesanan'];

    public $transaksi = [];

    public $item_pesanan;

    public function refreshComponent()
    {
        $this->pesanan = $this->pesanan;
    }

    public function getDetailProduk()
    {
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

    public function transaksiBayar(){
        dd($this->pesanan);
    }

    protected function getAllProduct()
    {
        $this->product = Product::with(['kategori', 'varian'])->get();
    }
    public function mount()
    {
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
        unset($this->item_pesanan['catatan']);
        if (!isset($this->item_pesanan['qty'])) {
            $this->item_pesanan['qty'] = 1;
        }
        $psanan = DetailPesanan::where(['id_produk' => $id_produk, 'id_pesanan' => $this->pesanan->id]);
        if ($psanan->first()) {
            $this->dispatchBrowserEvent('produk_sudah_ada');
        } else {
            if (DetailPesanan::create($this->item_pesanan)) {
                $this->dispatchBrowserEvent("produk_berhasil_di_tambahkan", $id_produk);
            }
        }
    }
    public function hapusDetailPesanan($id = null)
    {
        $a = DetailPesanan::where(['id' => $id, 'id_pesanan' => $this->pesanan->id])->first();
        if ($a->delete()) {
            $this->dispatchBrowserEvent("delete_detail_pesanan_berhasil", $id);
        } else {
            $this->dispatchBrowserEvent("delete_detail_pesanan_gagal", $id);
        }
    }
    public function clearDetailPesanan()
    {
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
