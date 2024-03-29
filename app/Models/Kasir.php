<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'kasir';

    protected $fillable= ['id_user','kas_awal','waktu_masuk','sisa_kas'];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function transaksi(){
        return $this->hasMany(Transaksi::class,'id_kasir');
    }
}
