<?php

namespace App\Http\Controllers\Backend;
use Yajra\DataTables\Contracts\DataTable;
use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LaporanProdukController extends Controller
{
    public function __invoke()
    {
        $this->setTitle('Laporan Produk');
        return view('backend.laporan.laporan_produk');
    }
    public function datatableAjax(){

        $produk = Product::with(['varian']);
        
        $produk->select(['satuan','harga_jual','harga_modal','stok','sisa_stok','nama_produk','id']);
        return DataTables::of($produk->get())
        ->addColumn('varian',function($row){
            $varian = '';
            foreach ($row->varian as $item) {
                $varian .= $item->nama_varian." ({$item->stok})  Rp. {" .formatRupiah($item->harga)."} ";
            }
            return $varian;
        })
        ->addColumn('sisa_stok',function($row){
            return $row->sisa_stok." ".$row->satuan;
        })
        ->addColumn('stok',function($row){
            return $row->stok." ".$row->satuan;
        })
        ->addColumn('terjual',function($row){
            $detailTransaksi = DetailTransaksi::where('kode_produk',$row->id);
            return $detailTransaksi->sum('jumlah'). " ".$row->satuan;
        })
        
        ->addColumn('pendapatan',function($row){
            $pendapatan = DetailTransaksi::where('kode_produk',$row->id)->sum('total');
            return "Rp. ".formatRupiah($pendapatan);
        })

        ->addColumn('harga',function($row){
            return "Harga Jual: Rp. ".formatRupiah($row->harga_modal)." - Harga Modal ".formatRupiah($row->harga_jual)."";
        })
        ->rawColumns(['action'])->make();
    }
}
