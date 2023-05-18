<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\HistoryPengeluaranKasir;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanPenjualan extends Controller
{
    public function getIdKasir() {
        $kasir = Auth::user()->getKasir();
        if ( $kasir ) {
            return $kasir->id;
        }
        return null;
    }
    public function pengeluaran(){
        if ( is_null($this->getIdKasir()) ) {
            return "Unautorize";
        }
        $data = HistoryPengeluaranKasir::where(['id_kasir'=>$this->getIdKasir()])->sum('jumlah_pengeluaran');
        return  "Rp. ".formatRupiah((int)$data);
    }
    public function dana_kas(){
        if ( is_null($this->getIdKasir()) ) {
            return "Unautorize";
        }
        
        return  "Rp. ".formatRupiah(Kasir::find($this->getIdKasir())->sisa_kas ?? 0);
    }
}
