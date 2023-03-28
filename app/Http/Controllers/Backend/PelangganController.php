<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $this->setTitle("Pelanggan");
        return view('backend.pelanggan.tampil');
    }
}
