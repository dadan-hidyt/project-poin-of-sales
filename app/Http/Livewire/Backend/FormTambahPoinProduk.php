<?php

namespace App\Http\Livewire\Backend;

use App\Models\PoinRewardProduk;
use App\Models\Product;
use Livewire\Component;

class FormTambahPoinProduk extends Component
{
    public $produk = [];
    public $data = [];
    public function mount()
    {
        $this->produk = Product::all();
    }
    public function simpan()
    {
        if (!isset($this->data['status'])) {
            $this->data['status'] = "N";
        }

        $this->validate([
            'data.status' => ['required'],
            'data.tanggal_mulai' => ['required'],
            'data.tanggal_berakhir' => ['required'],
            'data.min_pembelian' => ['required'],
            'data.jumlah_poin' => ['required'],
            'data.deskripsi' => ['required'],
            'data.nama_point_reward' => ['required'],

        ]);

        if (($data['semua_hari'] ?? false) == 1) {
            $this->data['hari'] = [];
        }
        if ($this->data['hari'] ?? false) {
            $this->data['semua_hari'] = 1;
            $this->data['hari'] = json_encode($this->data['hari']);
        } else {
            $this->data['hari'] = json_encode([]);
        }

        if ( $this->data['id_produk'] ) {
            $this->data['id_produk'] = json_encode($this->data['id_produk']);
        } else {
            $this->data['id_produk'] = json_encode([]);
        }

        if (PoinRewardProduk::create($this->data)) {
            $this->reset('data');
            $this->dispatchBrowserEvent('success');
        } else {
            $this->dispatchBrowserEvent('gagal');
        }
    }
    public function render()
    {
        return view('livewire.backend.form-tambah-poin-produk');
    }
}
