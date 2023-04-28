<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class POSController extends Controller
{
    public function pos($kode_pesanan = null){
        $this->setTitle("POS");
        return view('kasir.pos');
    }
}
