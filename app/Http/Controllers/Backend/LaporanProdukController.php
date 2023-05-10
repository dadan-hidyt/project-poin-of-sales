<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanProdukController extends Controller
{
    public function __invoke()
    {
        $this->setTitle('Laporan Produk');
        return view('backend.laporan.laporan_produk');
    }
}
