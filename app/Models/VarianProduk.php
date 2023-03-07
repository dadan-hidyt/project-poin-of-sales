<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarianProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_varian_produk';
    public function item(){
        return $this->hasMany(DetailVarianProduk::class,'id_varian','id');
    }
}
