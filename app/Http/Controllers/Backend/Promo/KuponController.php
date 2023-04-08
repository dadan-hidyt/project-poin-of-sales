<?php

namespace App\Http\Controllers\Backend\Promo;

use App\Http\Controllers\Controller;
use App\Repository\KuponRepository;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    public function index(){
        $this->setTitle("Manage Kupon");
        return view("backend.kupon.tampil");
    }
    public function datatable(KuponRepository $kuponRepository){
       return $kuponRepository->getDatatables();
    }
}
