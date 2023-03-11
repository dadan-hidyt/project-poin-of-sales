<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    protected $guarded = [];
    public function kategori(){
        return $this->belongsTo(KategoriProduk::class,'id_kategori_produk','id');
    }
    public function varian(){
        return $this->hasOne(VarianProduk::class,'id','id_varian');
    }
    public function transaksi(){
        return [];
    }
}
