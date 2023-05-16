<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use PDF;
class LaporanPajakController extends Controller
{
    public function __invoke(){

        return view('backend.laporan.laporan_pajak', [
            'transaksi' => Transaksi::select(['kode_transaksi','tanggal_order','total_pajak','id_pelanggan'])->get(),
        ]);
    }
    public function report( $id_trans = null ) 
    {
        if ( is_null($id_trans) )
        {
            abort(404, $message = 'Not Found');
        }

        $data = Transaksi::where( 'kode_transaksi', $id_trans );
        if ( $data = $data->first() )
        {
            $pdf = PDF::loadView( 'backend.laporan.laporan_generated.buat_laporan_pajak' ,compact('data'));
            return $pdf->stream();
        }
    }
    public function reportAll() 
    {
        $data = Transaksi::all();
        $pdf = PDF::loadView( 'backend.laporan.laporan_generated.buat_laporan_pajak_all' ,compact('data'));
        return $pdf->stream();
    }
}
