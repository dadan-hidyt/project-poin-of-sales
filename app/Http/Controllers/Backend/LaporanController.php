<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kasir;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function kasir(){
        $this->setTitle('Laporan Penjualan kasir');
        return view('backend.laporan.kasir', [
            'kasir' => Kasir::all(),
        ]);
    }
}
