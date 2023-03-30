<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repository\PelangganRepository;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $this->setTitle("Pelanggan");
        return view('backend.pelanggan.tampil');
    }
    public function datatable( Request $request, PelangganRepository $pelangganRepository ) {
        if($request->ajax()) {  
            return $pelangganRepository->getDataTable();
        } else {
            abort_if(404, 'Not Found');
        }
    }
}
