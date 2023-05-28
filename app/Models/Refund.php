<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $table = 'tb_refund';
    protected $guarded = [];
    public function user(){
        return $this->hasOne(User::class, 'id');
    }
    public function  transaksi(){
        return $this->belongsTo(Transaksi::class,'id_transaksi');
    }
}
