<?php
namespace App\Traits;

use App\Models\SatuanBarang;
use Illuminate\Support\Str;
trait HasProduk{
    public $satuan = [];

    public function __construct(){
        $this->satuan = SatuanBarang::all();
    }

    public function kodeProduk(){
        return Str::uuid();
    }
    public function clearNominal($nominal) : int{
        return (int) Str::replace('.','',$nominal);
    }
}