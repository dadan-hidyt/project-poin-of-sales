<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori_produk';
    public function product(){
        return $this->hasMany(Product::class,'id_katagori_produk','id');
    }
}
