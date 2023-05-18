<?php

namespace App\Http\Livewire\Backend;

use App\Models\PoinRewardPembelian;
use Livewire\Component;

class FormTambahPoinPerPembelian extends Component
{
    public $data = [];
    public function cekTanggal($start, $end)
    {
        if (strtotime($end) < strtotime($start)) {

            return true;
        }
        return false;
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
        if ($this->cekTanggal($this->data['tanggal_mulai'], $this->data['tanggal_berakhir'])) {
            $this->dispatchBrowserEvent('tanggal_berakhir_kurang_dari_tanggal_mulai');
        } else {
            if (($data['semua_hari'] ?? false) == 1) {
                $this->data['hari'] = [];
            }
            if ($this->data['hari'] ?? false) {
                $this->data['semua_hari'] = 1;
                $this->data['hari'] = json_encode($this->data['hari']);
            } else {
                $this->data['hari'] = json_encode([]);
            }


            if (PoinRewardPembelian::create($this->data)) {
                $this->reset('data');
                $this->dispatchBrowserEvent('success');
            } else {
                $this->dispatchBrowserEvent('gagal');
            }
        }
    }

    public function render()
    {
        return view('livewire.backend.form-tambah-poin-per-pembelian');
    }
}
