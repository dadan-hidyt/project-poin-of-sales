<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormTambahProduk extends Component
{
    public $produk = [];
    protected $rules = [
        'produk.nama_produk' => 'required|max:70',
        'produk.id_kategori_produk' => 'required',
        'produk.harga_jual' => 'required',
        'produk.harga_beli' => 'required',
        'produk.pajak' => 'required',
        'produk.stok' => 'required|integer',
        'produk.deskripsi' => 'max:120'
    ];
    public function tambah(){
        $this->validate();
        dd($this->produk);
    }
    public function render()
    {
        return view('livewire.form-tambah-produk');
    }
}
