<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisOrderController extends Controller
{
    //

    public function show()
    {
        $this->setTitle('Jenis Order');
        return view('backend.pengaturan.jenisordershow');
    }
}
