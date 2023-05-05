<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use Livewire\Component;

class ListPesanan extends Component
{
    public $pesanan = [];
    public function mount(){
        $this->pesanan = Pesanan::where([
            'id_kasir' => auth()->user()->getKasir()->id,
        ])->get();
    }
    public function render()
    {
        return view('livewire.list-pesanan');
    }
}
