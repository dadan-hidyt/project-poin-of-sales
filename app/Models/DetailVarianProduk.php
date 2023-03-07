<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailVarianProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_varian_produk';
    public function varian(){
        return $this->belongsTo(VarianProduk::class,'id_varian','id');
    }
}
