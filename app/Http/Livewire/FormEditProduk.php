<?php

namespace App\Http\Livewire;

use App\Traits\HasProduk;
use Illuminate\Cache\RateLimiting\Unlimited;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormEditProduk extends Component
{
    public $produk = [];
    public $item;
    public $foto = null;
    use HasProduk;
    use WithFileUploads;
    public function mount()
    {
        $this->produk = $this->item->toArray();
    }
    public function update()
    {
        $foto_lama = $this->produk['gambar_produk'];
        if ( $this->foto ) {
            $this->produk['gambar_produk'] = "product_image/".$this->foto->hashName();
        }
        $this->produk['harga_jual'] = $this->clearNominal($this->produk['harga_jual']);
        $this->produk['harga_beli'] = $this->clearNominal($this->produk['harga_beli']);
        if ($this->item->update($this->produk)) {
            if ( $this->foto ) {
                $this->foto->storePublicly('public/product_image');
                if ( file_exists($old_foto = base_path('storage/app/public/'.$foto_lama)) ) {
                    @unlink($old_foto);
                }
            }
            return redirect(route('dashboard.product.item'));
        } else {
            $this->dispatchBrowserEvent('update-gagal');
        }
    }
    public function render()
    {
        return view('livewire.form-edit-produk');
    }
}
