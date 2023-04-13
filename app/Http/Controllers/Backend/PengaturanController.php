<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SatuanBarang;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function struk()
    {
        $this->setTitle("Pengaturan Struk");
        return view('backend.pengaturan.struk');
    }
    public function satuanBarang()
    {
        $this->setTitle('Satuan Barang');
        return view('backend.pengaturan.satuan_barang', [
            'satuan' => SatuanBarang::all(),
        ]);
    }
    
    public function web()
    {
        $this->setTitle('Pengaturan Website');
        return view('backend.pengaturan.infowebsite');
    }
}
