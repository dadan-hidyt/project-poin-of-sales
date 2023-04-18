<?php
namespace App\Traits;

use App\Models\KategoriProduk;
use App\Models\SatuanBarang;
use Illuminate\Support\Str;
trait HasProduk{
    public $kategori = [];
    public $satuan = [];

    public function __construct(){
        $this->satuan = SatuanBarang::all();
        $this->kategori = KategoriProduk::all();
    }

    public function kodeProduk(){
        return Str::uuid();
    }
    public function clearNominal($nominal) : int{
        return (int) Str::replace('.','',$nominal);
    }
}