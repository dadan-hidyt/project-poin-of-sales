<?php

namespace App\Http\Livewire;

use App\Models\Kariawan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        'akun.role' => 'required'
    ];
    public $akun_model = null;
    public $edit = false;
    public $akun = [];
    public function chooseKaryawan($id)
    {
        if ($item = Kariawan::find($id)) {
            $this->akun['nama_user'] = $item->nama;
        }
    }
    public function update()
    {
        $this->validate();
        if ( !empty($this->akun['password']) ) {
            $this->akun['password'] = Hash::make($this->akun['password']);
        }
        if ($this->akun_model->update($this->akun)) {
            $this->dispatchBrowserEvent('feedback', [
                'type' => 'success',
                'message' => "Data berhasil di update!",
            ]);
        } else {
            $this->dispatchBrowserEvent('feedback', [
                'type' => 'error',
                'message' => "Data gagal di update!",
            ]);
        }
    }
    public function store()
    {
        //$this->rules['akun.password'] = 'required|confirmed';
        $this->validate();
        $this->akun['password'] = password_hash($this->akun['password'], PASSWORD_DEFAULT);
        if (User::create($this->akun)) {
            return redirect(route('dashboard.akun.index'));
        } else {
            $this->dispatchBrowserEvent('feedback', [
                'type' => 'error',
                'message' => "Data gagal di update!",
            ]);
        }
    }
    public function mount()
    {
        $this->karyawans = Kariawan::with('user')->get();

        if ($this->akun_model) {
            $this->akun = $this->akun_model->toArray();
        }
    }
    public function render()
    {
        return view('livewire.form-akun');
    }
}
