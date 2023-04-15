<?php

namespace App\Http\Livewire\Pengaturan;

use App\Models\PengaturanStruk;
use Livewire\Component;

class FormStruk extends Component
{
    public $struk = [];
    public $engaturan = [];
    public $strukModel = [];
    public function setNoTelp($e){
       if($this->strukModel->no_telp == 1) {
        $this->strukModel->update(['no_telp'=>'0']);
       } else {
        $this->strukModel->update(['no_telp'=>'1']);
       }
    }
    public function setEmail($e){
       if($this->strukModel->email == 1) {
        $this->strukModel->update(['email'=>'0']);
       } else {
        $this->strukModel->update(['email'=>'1']);
       }
    }
    public function setAlamat($e){
       if($this->strukModel->alamat == 1) {
        $this->strukModel->update(['alamat'=>'0']);
       } else {
        $this->strukModel->update(['alamat'=>'1']);
       }
    }
    public function setCatatan($var = '')
    {
        $this->strukModel->update(['catatan'=>$var]);
    }
    public function mount(){
       $this->strukModel = PengaturanStruk::find(1);
    }
    public function render()
    {
        return view('livewire.pengaturan.form-struk');
    }
}
