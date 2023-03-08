<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormTambahProduk extends Component
{
    public $produk = [];
    public function tambah(){
        dd($this->produk);
    }
    public function render()
    {
        return view('livewire.form-tambah-produk');
    }
}
