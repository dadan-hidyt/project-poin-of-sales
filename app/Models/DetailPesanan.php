<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_pesanan';
    protected $guarded = [];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class,'id_pesanan');
    }
     public function varian(){
        return $this->belongsToMany(VarianProduk::class,'detail_pesanan_varian_produk');
    }
    public function produk(){
        return $this->belongsTo(Product::class,'id_produk');
    }
    
}
