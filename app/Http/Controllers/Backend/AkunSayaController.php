<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkunSayaController extends Controller
{
    public function index()
    {
        $this->setTitle("Akun Saya");
        return view('backend.akun_saya');
    }
}
