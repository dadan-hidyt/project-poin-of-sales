<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $with = ['product'];
    private $primarykey = 'id_detail_transaksi';
    protected $table = 'tb_detail_transaksi';
    /**
     * ini ngerelasi ke model produk
     */
    public function product(){
        return $this->hasMany(Product::class,'kode_produk','kode_produk');
    }
}
