<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormEditProduk extends Component
{
    public $produk = [];
    public $item;
    public function mount(){
        $this->produk = $this->item->toArray();
    }

    public function render()
    {
        return view('livewire.form-edit-produk');
    }
}
