<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use Livewire\Component;

class ListPesanan extends Component
{
    public $pesanan = [];
    public function mount(){
        if ( auth()->user()->getKasir() ) {
           $pesanan = Pesanan::where([
                'id_kasir' => auth()->user()->getKasir()->id,
            ])->get();
        }
        $this->pesanan = $pesanan ?? [];
    }
    public function render()
    {
        return view('livewire.list-pesanan');
    }
}
