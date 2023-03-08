<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('backend.produk.tampil');
    }
}
