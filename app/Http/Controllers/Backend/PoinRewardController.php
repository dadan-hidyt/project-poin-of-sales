<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PoinRewardController extends Controller
{
    //

    public function index()
    {
        $this->setTitle("Poin Reward - Total Pembelian");
        return view('backend.poin.totalpembelian');
    }

    public function rewardProduk()
    {
        $this->setTitle("Poin Reward - Produk");
        return view('backend.poin.reward_produk');
    }

    public function view()
    {
        $this->setTitle("Daftar Poin");
        return view('backend.poin.daftar_poin');
    }
}
