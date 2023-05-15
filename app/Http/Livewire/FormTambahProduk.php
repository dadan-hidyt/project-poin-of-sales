<?php

namespace App\Http\Livewire;

use App\Models\KategoriProduk;
use App\Models\Product;
use App\Models\SatuanBarang;
use App\Models\VarianProduk;
use App\Traits\HasProduk;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormTambahProduk extends Component
{
    use HasProduk;
    use WithFileUploads;
    public $produk = [];
    public $satuan = [];
    public $foto = null;
    public $kategori = [];
    protected $rules = [
        'produk.nama_produk' => 'required|max:70',
        'produk.id_kategori_produk' => 'required',
        'produk.harga_jual' => 'required',
        'produk.harga_modal' => 'required',
        'produk.pajak' => 'required',
        'foto' => 'required',
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
        
        if ($this->foto) {
            $this->produk['gambar_produk'] = "product_image/".$this->foto->hashName();
        }

        $this->produk['id_kategori_produk'] = 1;
        $this->produk['harga_jual'] = $this->clearNominal($this->produk['harga_jual']);
        $this->produk['harga_modal'] = $this->clearNominal($this->produk['harga_modal']);
        $this->produk['sisa_stok'] = $this->produk['stok'];

        if ( $this->produk['produk_favorit'] === "Y" ) {
            $favorit = "Y";
        } else {
            $favorit = "N";
        }

        $this->produk['produk_favorit'] = $favorit;
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
            if ( $this->foto ) {
                $this->foto->storePublicly('public/product_image');
            } else {
                dd(234);
            }
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
