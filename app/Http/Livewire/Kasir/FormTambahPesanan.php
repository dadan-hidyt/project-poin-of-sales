<?php

namespace App\Http\Livewire\Kasir;

use App\Models\Meja;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use Livewire\Component;
use Illuminate\Support\Str;
class FormTambahPesanan extends Component
{
    public $pesanan;
    public $meja;
    public $type = 'FREE_TABLE';
    public $id_pelanggan;
    public $id_meja;
    public $jumlah_pelanggan;
    public $pelanggan;
    public function setType($type){
      $this->type = $type;
    }

    public function cekKapasitasMeja($val){
        if ( $this->type === "MEJA" && $this->id_meja) {
           $meja = Meja::find($this->id_meja);
           if ( $val >= $meja->kapasitas ) {
                session()->flash("error", [
                    "Jumlah pelanggan melebihi kapasitas meja!"
                ]);
           }
        }
    }

    public function pesan(){
        $payload = [
            'id_meja' => $this->id_meja,
            'id_pelanggan' => $this->id_pelanggan,
            'jumlah_pelanggan' => $this->jumlah_pelanggan,
            'type' => $this->type,
            'total_tagihan' => 0,
            'kode_pesanan' => Str::upper(uniqid("P-")),
        ];

        if ( Pesanan::create($payload) ) {
            return redirect(route('kasir.pos',$payload['kode_pesanan']));
        }
    }
    public function mount(){
        $this->pelanggan = Pelanggan::all();
        $this->meja = Meja::all();
    }

    public function render()
    {
        return view('livewire.kasir.form-tambah-pesanan');
    }
}