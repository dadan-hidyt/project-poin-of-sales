<?php

namespace App\Http\Livewire\Kasir;

use Livewire\Component;

class Pelanggan extends Component
{
    public $pelanggan = [];
    public $nama;
    public $telp;

    public function editPelanggan($id){
        dd($id);
    }

    public function render()
    {
        return view('livewire.kasir.pelanggan');
    }
}
