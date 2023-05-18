<?php

namespace App\Http\Livewire\Backend;

use App\Models\Product;
use Livewire\Component;

class FormTambahPoinProduk extends Component
{
    public $produk = [];
    public $data = [];
    public function mount(){
        $this->produk = Product::all();
    }
    public function render()
    {
        return view('livewire.backend.form-tambah-poin-produk');
    }
}
