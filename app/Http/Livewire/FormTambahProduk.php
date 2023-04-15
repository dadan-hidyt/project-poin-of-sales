<?php

namespace App\Http\Livewire;

use App\Models\KategoriProduk;
use App\Models\Product;
use App\Models\SatuanBarang;
use App\Models\VarianProduk;
use App\Traits\HasProduk;
use Illuminate\Support\Arr;
use Livewire\Component;

class FormTambahProduk extends Component
{
    use HasProduk;
    public $produk = [];
    public $satuan = [];
    public $kategori = [];
    protected $rules = [
        'produk.nama_produk' => 'required|max:70',
        'produk.id_kategori_produk' => 'required',
        'produk.harga_jual' => 'required',
        'produk.harga_beli' => 'required',
        'produk.pajak' => 'required',
        'produk.stok' => 'required|integer',
        'produk.deskripsi' => 'max:120',
        'produk.satuan' => 'required'
    ];
    public function getKategori()
    {
        $this->kategori = KategoriProduk::all();
    }
    public function getSatuan()
    {
        $this->satuan = SatuanBarang::all();
    }
    public function mount()
    {
        $this->getKategori();
        $this->getSatuan();
    }
    public function tambah(Product $product)
    {

        $this->validate();

        /**
         * harga jual nya bresihkan titik2 ke integer
         */
        $this->produk['id_kategori_produk'] = 1;
        $this->produk['harga_jual'] = $this->clearNominal($this->produk['harga_jual']);
        $this->produk['harga_beli'] = $this->clearNominal($this->produk['harga_beli']);
        //create
        if (
            $product->create(
                Arr::add(
                    $this->produk,
                    'kode_produk',
                    $this->kodeProduk()
                )
            )
        ) {

            $this->resetExcept('produk');
            $this->dispatchBrowserEvent('productAdded', [
                'success' => true,
            ]);
        } else {
            $this->dispatchBrowserEvent('productAdded', [
                'success' => false,
            ]);
        }
    }
    public function render()
    {
        return view('livewire.form-tambah-produk');
    }
}
