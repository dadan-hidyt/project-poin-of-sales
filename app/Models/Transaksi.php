<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Transaksi extends Model
{
    use HasFactory;
    protected $with = ['detailTransaksi'];
    protected $primarykey = 'id_transaksi';
    protected $table = 'tb_transaksi';
    public function detailTransaksi(){
        return $this->hasMany(DetailTransaksi::class,'id_transaksi','id_transaksi');
    }
}
?>
