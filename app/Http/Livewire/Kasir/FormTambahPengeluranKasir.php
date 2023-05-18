<?php

namespace App\Http\Livewire\Kasir;

use App\Models\HistoryPengeluaranKasir;
use App\Models\Kasir;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormTambahPengeluranKasir extends Component
{
    public $data = [];
    public function simpan()
    {
        $this->validate([
            'data.nama_pengeluaran' => ['required', 'string'],
            'data.jumlah_pengeluaran' => ['required', 'string'],
            'data.keterangan' => ['required'],

        ]);
        $kasir = Auth::user()->getKasir();
        $id = $kasir->id;
        if ( (int)$this->data['jumlah_pengeluaran'] > (int)$kasir->sisa_kas ) {
            $this->dispatchBrowserEvent('pengeluaran_lebih_besar_dari_kas_awal', ['sisa_kas'=>$kasir->sisa_kas]);
        } else{
            $this->data['tanggal'] = now();
            $this->data['id_kasir'] = $id;
            if (HistoryPengeluaranKasir::create($this->data)) {
               $kasir = Kasir::find($id)->update(['sisa_kas'=> $kasir->sisa_kas - $this->data['jumlah_pengeluaran']]);
                $this->reset('data');
                $this->dispatchBrowserEvent('berhasil_ditambahkan');
            } else {
                $this->dispatchBrowserEvent('gagal_ditambahkan');
            }
        }

       
    }
    public function render()
    {
        return view('livewire.kasir.form-tambah-pengeluran-kasir');
    }
}
