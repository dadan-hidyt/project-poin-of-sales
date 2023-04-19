<?php

namespace App\Http\Livewire;

use App\Models\Meja;
use Livewire\Component;

class FormMeja extends Component
{
    public $type;
    public $meja_model;
    public $prefix_meja = "MJ-";
    public $meja = [];
    protected $rules = [
        'meja.nama' => 'required',
        'meja.nomor_meja' => 'required|unique:tb_meja,nomor_meja',
        'meja.kapasitas' => 'required',
        'meja.tersedia' => 'required',
    ];
    protected $validationAttributes = [
        'meja.nama' => "Nama meja",
        "meja.nomor_meja" => "Nomor Meja",
        'meja.kapasitas' => "Kapasitas",
        'meja.tersedia' => "Status ketersediaan"
    ];
    public function genereateNomorMeja(){

    }
    public function tambah(){
        $this->validate();
        if (Meja::create($this->meja) ) {
            return redirect(route('dashboard.meja.index'));
        }
        $this->dispatchBrowserEvent('gagal');
    }
    public function edit(){
        $this->validate();
        if ($this->meja_model->update($this->meja) ) {
            return redirect(route('dashboard.meja.index'));
        }
        $this->dispatchBrowserEvent('gagal');
    }
    public function mount(){
        if ( $this->type === 'edit' ) {
            $this->meja = $this->meja_model->toArray();
        }
    }
    public function render()
    {
        return view('livewire.form-meja');
    }
}
