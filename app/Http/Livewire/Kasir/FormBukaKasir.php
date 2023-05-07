<?php

namespace App\Http\Livewire\Kasir;

use App\Models\Kasir;
use Livewire\Component;

class FormBukaKasir extends Component
{
    public $status = false;

    public $tanggal_masuk;
    public $kas_awal;
    protected $rules = [
        'kas_awal' => 'required'
    ];
    public function mount(){
        $kasir = Kasir::where(['id_user'=> auth()->user()->id, 'waktu_keluar'=>null])->first();
        if ( !$kasir ) {
            $this->status = true;
        }
        
    }
    public function submit(){
        $this->validate();
        if ( Kasir::create([
            'id_user' => auth()->user()->id,
            'waktu_masuk' => now(),
            'kas_awal' => (int) str_replace('.','',$this->kas_awal),
        ]) ) {
          return redirect()->route('kasir.index');
        } else {
            return redirect()->route('kasir.index');
        }
    }
    public function render()
    {
        return view('livewire.kasir.form-buka-kasir');
    }
}
