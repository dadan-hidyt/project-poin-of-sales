<?php

namespace App\Http\Livewire;

use App\Models\Kupon;
use App\Models\Product;
use Livewire\Component;

class FormKupon extends Component
{
    public $kupon = [
        'masa_berlaku' => null,
    ];
    public $rules = [
        'kupon.nama_kupon' => 'required',
        'kupon.deskripsi_kupon' => 'required',
        'kupon.jumlah_potongan' => 'required'

    ];
    public $type = null;
    public $product = [];
    public ?Kupon $kupon_model = null;
    public function simpanEdit()
    {
        $this->clearChecked();
        if ($this->kupon['kode_kupon'] !== $this->kupon_model?->kode_kupon) {
            $this->rules['kupon.kode_kupon'] =  'required|max:5|unique:tb_kupon,kode_kupon';
        } else {
            $this->rules['kupon.kode_kupon'] =  'required|max:5';
        }
        $this->validate();
        if ($this->kupon_model->update($this->kupon)) {
            $this->dispatchBrowserEvent("sukses", "Data pelanggan berhasil di update");
        } else {
            $this->dispatchBrowserEvent("gagal", "Data gagal berhasil di update");
        }
    }
    public function mount($kupon_model, $type)
    {
        $this->type = $type;
        $this->product = Product::all(['nama_produk', 'id']);
        $this->kupon_model = $kupon_model;
        if ($this->kupon_model) {
            $this->kupon = $kupon_model->toArray();
        }
    }
    public function clearChecked()
    {
        $masa_berlaku = $this->kupon['masa_berlaku_checked'] ?? false;
        unset($this->kupon['masa_berlaku_checked']);

        if ($masa_berlaku === true) {
            $this->kupon['masa_berlaku'] = null;
        }
    }
    public function simpan()
    {
        $this->rules['kupon.kode_kupon'] = 'required|max:5|unique:tb_kupon,kode_kupon';
        $this->validate();

        $this->clearChecked();

        if (Kupon::create($this->kupon)) {
            $this->resetExcept('kupon');
            $this->reset('kupon');
            $this->dispatchBrowserEvent('kupon_added', [
                'success' => true,
            ]);
        } else {
            $this->resetExcept('kupon');
            $this->dispatchBrowserEvent('kupon_added', [
                'success' => false,
            ]);
        }
    }
    public function render()
    {
        return view('livewire.form-kupon');
    }
}
