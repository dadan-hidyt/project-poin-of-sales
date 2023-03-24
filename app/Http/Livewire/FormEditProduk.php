<?php

namespace App\Http\Livewire;

use App\Traits\HasProduk;
use Livewire\Component;

class FormEditProduk extends Component
{
    public $produk = [];
    public $item;
    use HasProduk;
    public function mount()
    {
        $this->produk = $this->item->toArray();
    }
    public function update()
    {
        $this->produk['harga_jual'] = $this->clearNominal($this->produk['harga_jual']);
        $this->produk['harga_beli'] = $this->clearNominal($this->produk['harga_beli']);
        if ($this->item->update($this->produk)) {
            $this->dispatchBrowserEvent('update-success');
        } else {
            $this->dispatchBrowserEvent('update-gagal');
        }
    }
    public function render()
    {
        return view('livewire.form-edit-produk');
    }
}
