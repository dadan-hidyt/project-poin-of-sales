<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    // protected $with = ['produk'];
    private $primarykey = 'id_detail_transaksi';
    protected $table = 'tb_detail_transaksi';
    protected $guarded = [];
    /**
     * ini ngerelasi ke model produk
     */
    public function produk(){
        return $this->belongsTo(Product::class,'kode_produk','id');
    }
   
}
