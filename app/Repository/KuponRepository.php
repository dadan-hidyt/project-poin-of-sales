<?php

namespace App\Repository;

use App\Models\Kupon;
use Yajra\DataTables\DataTables;

class KuponRepository
{

    public function getDatatables()
    {
        $dataKupon = Kupon::with('produk')->get();
        return DataTables::of($dataKupon)->addIndexColumn()->addColumn('action', function ($row) {
            $html = "<a class='btn-delete' onclick='return confirm('Apakah anda yakin?')' href='" . route('dashboard.product.kategori.delete', $row->id) . "'> <i class='fa fa-trash'></i></a>";
            $html .= "&nbsp;";
            $html .= "<a class='btn-edit' href='" . route('dashboard.product.kategori.update', $row->id) . "'> <i class='fa fa-edit'></i></a>";
            return $html;
        })->addColumn('produk',function($row){
            if($row->produk){
                return $row->produk->nama_produk;
            } else {
                return "Semua produk";
            }
        })->rawColumns(['action'])->make();
    }
}
