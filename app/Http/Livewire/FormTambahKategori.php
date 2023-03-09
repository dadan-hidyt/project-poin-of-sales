<?php

namespace App\Http\Livewire;

use App\Models\KategoriProduk;
use Livewire\Component;
use Illuminate\Support\Arr;

class FormTambahKategori extends Component
{
    public $kategori = [];
    public function tambah(KategoriProduk $kategoriProduk)
    {
        $this->kategori['urutan'] = 1;
        if ($kategoriProduk->create($this->kategori)) {
            $this->resetExcept('kategori');
            $this->dispatchBrowserEvent('kategoriDitambahkan', true);
        } else {
            $this->dispatchBrowserEvent('kategoriDitambahkan', true);
        }
    }
    public function render()
    {
        return view('livewire.form-tambah-kategori');
    }
}