<?php
namespace App\Traits;
use Illuminate\Support\Str;
trait HasProduk{
    public function kodeProduk(){
        return Str::uuid();
    }
    public function clearNominal($nominal) : int{
        return (int) Str::replace('.','',$nominal);
    }
}