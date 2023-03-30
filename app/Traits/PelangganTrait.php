<?php
namespace App\Traits;

use App\Models\Pelanggan;
use Illuminate\Support\Str;
trait PelangganTrait{
    public function buatKodePelanggan(){
        return Str::uuid();
    }
}