<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    use HasFactory;
    protected $table = 'tb_kupon';
    
    public function produk(){
        return $this->hasOne(Product::class,'id','id_produk');
    }
}
