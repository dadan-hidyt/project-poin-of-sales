<?php

namespace App\Http\Controllers\Backend;
use PDF;
use App\Http\Controllers\Controller;
use App\Models\Kasir;
use Illuminate\Http\Request;

class LaporanKasirController extends Controller
{
    public function kasir(){
        $this->setTitle('Laporan Penjualan kasir');
        return view('backend.laporan.kasir', [
        'kasir' => Kasir::all(),
        ]);
    }
    public function genreatePdf($kasir){
        return PDF::loadView('backend.laporan.laporan_generated.buat_laporan_kasir', [
            'kasir' => $kasir,
        ]);

    }
    public function download( $kasir ){
        return $this->genreatePdf($kasir)->download("laporan.pdf");
    }
    public function viewPdf($kasir){
        return $this->genreatePdf($kasir)->stream();
    }
    public function print( $id = null ){
        abort_if($id === null,404);

        $kasir = Kasir::with(['user','transaksi'])->findOrFail($id);
        $type = request()->type ?? 'print';
        return match($type){
            "print" => $this->viewPdf($kasir),
            "download" => $this->download($kasir),
            default => $this->viewPdf($kasir)
        };
    }
}
