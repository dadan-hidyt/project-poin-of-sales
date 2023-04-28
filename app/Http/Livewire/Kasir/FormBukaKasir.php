<?php

namespace App\Http\Livewire\Kasir;

use App\Models\Kasir;
use Livewire\Component;

class FormBukaKasir extends Component
{
    public $status = false;

    public $tanggal_masuk;
    public $kas_awal;

    public function mount(){
        $kasir = Kasir::where(['id_user'=> auth()->user()->id, 'waktu_keluar'=>null])->first();
        if ( $kasir ) {
            $this->status = true;
        }
        
    }
    public function submit(){
        dd(intval($this->kas_awal));
    }
    public function render()
    {
        return view('livewire.kasir.form-buka-kasir');
    }
}
