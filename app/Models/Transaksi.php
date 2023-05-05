<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Transaksi extends Model
{
    use HasFactory;
    protected $with = ['detailTransaksi','pelanggan','meja','kasir','refund'];
    protected $table = 'tb_transaksi';
    protected $guarded = [];
    public function detailTransaksi(){
        return $this->hasMany(DetailTransaksi::class,'kode_transaksi','kode_transaksi');
    }
    public function pelanggan(){
        return $this->hasOne(Pelanggan::class,'id','id_pelanggan');
    }
    public function meja(){
        return $this->belongsTo(Meja::class,'id_meja');
    }
    public function kasir(){
        return $this->belongsTo(Kasir::class,'id_kasir');
    }
    public function refund(){
        return $this->hasOne(Refund::class, 'id_transaksi');
    }
    public function transaksiHariIni(){
        $time = date('Y-m-d', strtotime( now()));
        $transaksi = Transaksi::whereDate('tanggal_order',$time)->get();
        $data['total'] = 0;
        $data['jumlah'] = 0;
        foreach ($transaksi as $item){
            $data['total']++;
            if ( !$item->refund OR ($item->refund && $item->refund->status !== 'Y') ) {
                $data['jumlah'] += ($item->jumlah + $item->jumlah_pajak);
            } else {
                continue;
            }
        }
        return $data;
    }
    public function hitungJumlahSemuaTransaksi(){
        $jmlh = 0;
        $datas = $this->all();
        foreach($datas as $data){
            if ( !$data->refund OR ($data->refund && $data->refund->status !== 'Y') ) {
                $jmlh += ($data->jumlah + $data->jumlah_pajak);
            } else {
                continue;
            }
        }
        return $jmlh;
    }
    public function getRefund(){
        
    }
}
?>
