<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\VarianProduk;
use App\Traits\HasProduk;
use Illuminate\Support\Arr;
use Livewire\Component;

class FormTambahProduk extends Component
{
    use HasProduk;
    public $produk = [];
    protected $rules = [
        'produk.nama_produk' => 'required|max:70',
        'produk.id_kategori_produk' => 'max:10',
        'produk.harga_jual' => 'required',
        'produk.harga_beli' => 'required',
        'produk.pajak' => 'required',
        'produk.stok' => 'required|integer',
        'produk.deskripsi' => 'max:120',
        'produk.satuan' => 'required'
    ];
  
    public function tambah(Product $product)
    {

        $this->validate();
        
        dd($this->produk);
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
            dd($this->produk);
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