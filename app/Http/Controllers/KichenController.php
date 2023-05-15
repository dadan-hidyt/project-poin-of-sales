<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class KichenController extends Controller
{
    public function __invoke()
    {
        $pesanan = request()->get('pesanan');
        if( $pesanan ) {
            $status = "PROSESS";
            if ( $statuses = request()->status ) {
                if ( in_array($statuses, ['noted','dimasak','selesai']) ) {
                    $status = strtoupper($statuses);
                }
            }
            $pesanan = Pesanan::findOrFail($pesanan);
            $pesanan->status_pesanan = $status;
            if ( $pesanan->save() ) {
                return redirect()->route('kasir.kichen');
            }
        }
        return view('kichen_display', [
            'pesanan' => Pesanan::with(['detail_pesanan'])->get(),
        ]);
    }
}
