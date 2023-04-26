<?php

namespace App\Http\Livewire;

use App\Models\Kariawan;
use App\Models\User;
use Livewire\Component;

class FormAkun extends Component
{
    public $karyawans;
    public $karyawan;
    protected $rules = [
        "akun.id_kariawan" => "required",
        "akun.nama_user" => "required|string",
        "akun.login_token" => "required|max:6|min:6",
        "akun.email" => "required",
    ];
    public $akun = [];
    public function chooseKaryawan($id)
    {
        if ($item = Kariawan::find($id)) {
            $this->akun['nama_user'] = $item->nama;
        }
    }
    public function store()
    {
        $this->validate();
        $this->akun['password'] = password_hash($this->akun['password'],PASSWORD_DEFAULT);
        if ( User::create($this->akun) ) {
            return redirect(route('dashboard.akun.index'));
        }
    }
    public function mount()
    {
        $this->karyawans = Kariawan::with('user')->get();
    }
    public function render()
    {
        return view('livewire.form-akun');
    }
}
