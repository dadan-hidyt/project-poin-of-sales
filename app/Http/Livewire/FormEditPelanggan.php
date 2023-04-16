<?php

namespace App\Http\Livewire;

use App\Models\Pelanggan;
use App\Traits\HasProduk;
use Livewire\Component;

class FormEditPelanggan extends Component
{
    public $pelanggans = [];
    use HasProduk;
    public $rules = [
        'pelanggans.nama' => 'required|max:80',
        'pelanggans.email' => 'required|max:50',
        'pelanggans.no_hp' => "required|digits_between:12,13|exists:tb_pelanggan,no_hp",
        'pelanggans.alamat' => "required",
        'pelanggans.jenis_kelamin' => "required"
    ];
    public ?Pelanggan $pelanggan_model = null;
    public function mount($pelanggan){
        $this->pelanggans = $pelanggan->toArray();
        $this->pelanggan_model = $pelanggan;
    }
    //edit pelanggan
    public function edit(){
        $this->validate();
        if($this->pelanggan_model->update($this->pelanggans)) {
           $this->dispatchBrowserEvent("sukses", "Data pelanggan berhasil di update");
        } else {
            $this->dispatchBrowserEvent("gagal", "Data pelanggan gagal di update");
        }
    }
    public function render()
    {
        return view('livewire.form-edit-pelanggan');
    }
}
