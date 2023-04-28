<?php

namespace App\Http\Livewire;

use App\Models\DetailPesanan;
use App\Models\KategoriProduk;
use App\Models\Pesanan;
use App\Models\Product;
use Livewire\Component;

class Pos extends Component
{
    public $kategori;

    public $product;

    public $search_term;

    
    public $pesanan;


    public $item_pesanan;

    public function updated(){
        if ( $this->search_term != null ) {
            $product = Product::with(['kategori','varian'])->where('nama_produk',"like",'%'.$this->search_term.'%')->get();
            if ( $product ) {
                $this->product = $product;
            }
        } else {
            $this->getAllProduct();
        }
    }
    protected function getAllProduct(){
        $this->product = Product::with(['kategori','varian'])->get();
    }
    public function mount(){
        $this->getAllProduct();
    }
    public function _getCategory(){
        if ( $data = KategoriProduk::all() ) {
            $this->kategori = $data;
        }
    }
    public function simpanItemPesanan($id_produk){
        $this->item_pesanan['id_produk'] = $id_produk;
        $this->item_pesanan['id_pesanan'] = $this->pesanan->id;
        unset($this->item_pesanan['catatan']);
        //get berdasarkan id produk

        $psanan = DetailPesanan::where(['id_produk'=>$id_produk,'id_pesanan'=>$this->pesanan->id]);
        if ($psanan->first()){
            dd("ADA");
        } else {
           if ( DetailPesanan::create($this->item_pesanan) ) {
            dd("SUDAH");
           }
        }
    }
    public function render()
    {
        return view('livewire.pos');
    }
}
