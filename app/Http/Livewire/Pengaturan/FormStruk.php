<?php

namespace App\Http\Livewire\Pengaturan;

use App\Models\PengaturanStruk;
use Livewire\Component;

class FormStruk extends Component
{
    public $struk = [];
    public $strukModel = [];
    public function mount(){
        $this->strukModel = PengaturanStruk::all();
        $data = [];
        foreach ($this->strukModel as  $value) {
            $data[$value->key] = $value->value;
        }
        $this->struk = $data;
    }
    public function render()
    {
        return view('livewire.pengaturan.form-struk');
    }
}
