<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarianProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_varian_produk';
    protected $guarded = [];
    public function item(){
        return $this->belongsTo(Product::class,'id_produk','id');
    }
    
    public function detailProduk(){
        return $this->belongsTo(DetailPesananVarian::class);
    }

    
}
