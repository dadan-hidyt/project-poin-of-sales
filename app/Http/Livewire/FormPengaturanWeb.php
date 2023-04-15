<?php

namespace App\Http\Livewire;

use App\Models\PengaturanWeb;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPengaturanWeb extends Component
{
    use WithFileUploads;
    public $pengaturan = [];
    public $logo = null;
    public $pengaturan_model;
    public function mount(){
        $this->pengaturan_model = PengaturanWeb::first();
        if($this->pengaturan_model) {
            $this->pengaturan = $this->pengaturan_model->toArray();
        }
    }
    public function simpan(){
        //jika logo ada ubah nama logo di database dengan logo
        //yang baru di upload
        if($this->logo){
            $this->pengaturan['logo'] = "storage/web/".$this->logo->hashName();
            if(file_exists($file = public_path($this->pengaturan_model['logo'] ?? ''))){
                @unlink($file);
            }
        }
        //ini adalah proses update
        $process = $this->pengaturan_model 
        ? $this->pengaturan_model->update($this->pengaturan) 
        : PengaturanWeb::create($this->pengaturan);
        if($process) {
            if($this->logo){
                $this->logo->storePublicly('public/web');
            }
            $this->dispatchBrowserEvent('sukses',"Pengaturan Berhasil di ubah");
        } else {
            $this->dispatchBrowserEvent('gagal',"Pengaturan gagal di ubah");
        }
    }
    public function render()
    {
        return view('livewire.form-pengaturan-web');
    }
}
