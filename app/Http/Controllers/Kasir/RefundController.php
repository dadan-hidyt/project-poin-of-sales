<?php

namespace App\Http\Controllers\kasir;

use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function refund($id_transaksi = null)
    {
        abort_if($id_transaksi === null, 404);
        $transaksi = Transaksi::where([
            'kode_transaksi' =>
            $id_transaksi,
            'id_kasir' => $this->kasir()->id
        ])->first();
        abort_if($transaksi === null, 404);
        return view('kasir.refund', compact('transaksi'));
    }
    public function accept()
    {
    }
}
