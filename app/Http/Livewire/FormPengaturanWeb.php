<?php

namespace App\Http\Livewire;

use App\Models\PengaturanWeb;
use Livewire\Component;

class FormPengaturanWeb extends Component
{
    public $pengaturan = [];
    public $pengaturan_model;
    public function mount(){
        $this->pengaturan_model = PengaturanWeb::first();
        if($this->pengaturan_model) {
            $this->pengaturan = $this->pengaturan_model->toArray();
        }
    }
    public function simpan(){
        if($this->pengaturan_model->update($this->pengaturan)) {
            $this->dispatchBrowserEvent('sukses',"Pengaturan Berhasil di ubah");
        } else {
            $this->dispatchBrowserEvent('gagal',"Pengaturan gagal di ubah");
        }
    }
    public function render()
    {
        return view('livewire.form-pengaturan-web');
    }
}
