<?php

namespace App\Http\Livewire\Kasir;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormLogin extends Component
{
    public $user;
    public $id_user;
    public $pin;
    protected $rules = [
        'id_user' => 'required',
        'pin' => 'required|max:4|min:4'
    ];
    public function mount(){
        $this->user = User::where('role','kasir')->get();
    }
    public function doLogin(){
        $this->validate();
        $user = User::find($this->id_user);
        
        if ( $user->login_token === $this->pin ) {
            $id = $user->id;
            $auth = Auth::loginUsingId($id);
            if ( $auth ) {
                return redirect(route('kasir.index'));
            }
        } else {
            $this->dispatchBrowserEvent('pin_salah', "Pin yang anda ketikan salah!");
        }
    }

    public function render()
    {
        return view('livewire.kasir.form-login');
    }
}
