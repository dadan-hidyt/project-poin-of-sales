<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    use HasFactory;
    protected $table = 'tb_kupon';
    
    public function product(){
        return $this->hasMany(Product::class,'id_produk','id');
    }
}
