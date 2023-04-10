<?php

namespace App\Http\Livewire;

use App\Models\Pelanggan;
use App\Traits\PelangganTrait;
use Illuminate\Support\Arr;
use Livewire\Component;
use Illuminate\Support\Str;

class FormTambahPelanggan extends Component
{
    use PelangganTrait;
    public $rules = [
        'pelanggans.nama' => 'required|max:80',
        'pelanggans.email' => 'required|max:50',
        'pelanggans.alamat' => "required",
        'pelanggans.jenis_kelamin' => "required"
    ];
    public $pelanggans = [];
    public function tambah()
    {
        $this->validate();

        $data = Arr::add($this->pelanggans, 'kode_pelanggan', $this->buatKodePelanggan());

        if (Pelanggan::create($data)) {
            $this->pelanggans = [];
            $this->dispatchBrowserEvent('added', [
                'status' => true,
                'msg' => 'Data Berhasil Di tambahkan !'
            ]);
        } else {
            $this->dispatchBrowserEvent('added', [
                'status' => false,
                'msg' => 'Data gagal Di tambahkan !'
            ]);
        }
    }
    public function render()
    {
        return view('livewire.form-tambah-pelanggan');
    }
}
