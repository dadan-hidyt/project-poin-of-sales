<?php
namespace App\Repository;
use App\Models\KategoriProduk;
use Yajra\DataTables\DataTables;
class KategoriProdukRepository{
    public function getAll(){
        return KategoriProduk::latest()->get();
    }
    public function getDataTables(){
        $kategori = KategoriProduk::select(['nama_kategori','id'])->get();
        return DataTables::of($kategori)->addIndexColumn()->addColumn('action',function($row){
            $html = "<a class='btn-delete' onclick='return confirm('Apakah anda yakin?')' href='".route('dashboard.product.kategori.delete',$row->id)."'> <i class='fa fa-trash'></i></a>";
            $html .= "&nbsp;";
            $html .= "<a class='btn-edit' href='".route('dashboard.product.kategori.update',$row->id)."'> <i class='fa fa-edit'></i></a>";
        return $html;
        })->rawColumns(['action'])->make();

    }
    
}
