<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_pesanan';
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class, "id_pelanggan");
    }
    public function meja(){
        return $this->belongsTo(Meja::class, 'id_meja');
    }
}
