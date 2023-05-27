<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\VarianProduk;
use Livewire\Component;

class FormTambahVarian extends Component
{
    public $produk;
    public $varian = [];
    public $edit = false;
    protected $rules = [
        'varian.nama_varian' => 'required',
        'varian.stok' => 'required|integer',
        'varian.harga' => 'required|integer',
    ];
    public function mount(){
        $this->produk = Product::all();
    }
    public function store(){
        $this->validate();
        if ( VarianProduk::create($this->varian) ) {
            return redirect(route('dashboard.produk.varian'));
        }else{
            $this->dispatchBrowserEvent('feedback', [
                'text' => "Data gagal di tambahkan!",
                'type' => 'error',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.form-tambah-varian');
    }
}
