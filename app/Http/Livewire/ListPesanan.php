<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use Livewire\Component;

class ListPesanan extends Component
{
    public $pesanan = [];
    public function mount(){
        $this->pesanan = Pesanan::all();
    }
    public function render()
    {
        return view('livewire.list-pesanan');
    }
}
