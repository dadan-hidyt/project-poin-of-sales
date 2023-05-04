<?php

namespace App\Http\Livewire\Kasir;

use App\Models\Refund as ModelsRefund;
use App\Models\Transaksi;
use Livewire\Component;

class Refund extends Component
{
    public $pin;
    public $transaksi = null;
    public function refund(){
        $user = auth()->user()->login_token;
        if ( $user && $user === $this->pin ) {
            if ( $this->transaksi->refund->status ?? 'N' === 'Y' ) {
                return redirect()->route('kasir.all_transaktion');
            } else {
                $create = ModelsRefund::create([
                    'id_transaksi' => $this->transaksi->id,
                    'status'=>'N', 
                    'id_kasir'=>auth()->user()->getKasir()->id,
                    'id_user'=> NULL,
                ]);
                if ($create){
                   return redirect()->route('kasir.all_transaktion');
                }
            }
        }else {
            session()->flash('error',"Autentikasi gagal! Pin yang anda masukan salah!");
        }
    }
    
    public function render()
    {
        return view('livewire.kasir.refund');
    }
}
