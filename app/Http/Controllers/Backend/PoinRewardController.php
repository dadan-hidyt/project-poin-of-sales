<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PoinRewardPembelian;
use Illuminate\Http\Request;

class PoinRewardController extends Controller
{
    //
    public function deletePoinRewardPembelian($id = null) {
        if ( is_null($id) ) {
            abort(404);
        }
       $id = PoinRewardPembelian::findOrFail($id);
       if ( $id->delete() ) {
            return redirect()->back()->with('sukses', "Data Berhasil di hapus");
       }
    }
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
        return view('backend.poin.daftar_poin', [
            'poin' => PoinRewardPembelian::all(),
        ]);
    }
}
