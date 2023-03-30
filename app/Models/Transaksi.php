<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Transaksi extends Model
{
    use HasFactory;
    protected $with = ['detailTransaksi'];
    protected $table = 'tb_transaksi';
    public function detailTransaksi(){
        return $this->hasMany(DetailTransaksi::class,'kode_transaksi','kode_transaksi');
    }
    public function pelanggan(){
        return $this->hasOne(Pelanggan::class,'id','id_pelanggan');
    }
}
?>
