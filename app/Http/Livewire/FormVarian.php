<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\VarianProduk;
use Livewire\Component;

class FormVarian extends Component
{
    public $produk;
    public $varian = [];
    public $varianModel;
    public $edit = false;
    protected $rules = [
        'varian.nama_varian' => 'required',
        'varian.stok' => 'required|integer',
        'varian.harga' => 'required|integer',
    ];
    public function mount(){
        $this->produk = Product::all();
        if ( $this->varianModel ) {
            $this->varian = $this->varianModel;
        }
    }
    public function edit(){
        $this->validate([
            'varian.nama_varian' => 'required',
            'varian.stok' => 'required|integer',
            'varian.harga' => 'required|integer',
        ]);
        if ( $this->varianModel->update($this->varian->toArray()) ) {
            return redirect(route('dashboard.produk.varian'));
        }else{
            $this->dispatchBrowserEvent('feedback', [
                'text' => "Data gagal di edit!",
                'type' => 'error',
            ]);
        }
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
