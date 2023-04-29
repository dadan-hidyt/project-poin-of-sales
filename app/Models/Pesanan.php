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
    public function detail_pesanan(){
        return $this->hasMany(DetailPesanan::class,'id_pesanan');
    }

    public function hitungPesanan(){
        $data = $this->detail_pesanan;
        $subtotal = 0;
        $pajak = 0;
        foreach ($data as $item){
            $subtotal += $item->produk->harga_jual * $item->qty;
            if($item->produk->pajak && $item->produk->pajak != 0 && !empty($item->produk->pajak)) {
                $pajak += ($item->produk->harga_jual * ($item->produk->pajak / 100));
            }
        }
       return [
            'subtotal' => $subtotal,
            'pajak' => $pajak,
       ];
    }
}
