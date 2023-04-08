<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class FormKupon extends Component
{
    public $kupon = [];
    public $type = null;
    public $product = [];
    public function simpanEdit(){
        
    }
    public function mount(){
        $this->product = Product::all(['nama_produk','id']);
    }
    public function simpan(){
        if ($this->kupon['masa_berlaku_checked'] === true) {
           $this->kupon['masa_berlaku'] = NULL;
        }
        dd($this->kupon);
    }
    public function render()
    {
        return view('livewire.form-kupon');
    }
}
