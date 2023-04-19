<?php
namespace App\Repository;
use App\Models\Meja;
use Yajra\DataTables\DataTables;
class MejaRepository{
    public function getAll(){
        return Meja::latest()->get();
    }
    public function getDataTables(){
        $kategori = Meja::select()->get();
        return DataTables::of($kategori)->addIndexColumn()
        ->addColumn('tersedia', function($row){
            if($row->tersedia) {
                $html = '<span class="badge badge-success">YA</span>';
            } else {
                $html = '<span class="badge badge-danger">TIDAK</span>';
            }
            return $html;
        })->addColumn('action',function($row){
            $html = "<a class='btn-delete' onclick='return confirm(\"Apakah anda yakin?\")' href='".route('dashboard.meja.delete',$row->id)."?_method=DELETE'> <i class='fa fa-trash'></i></a>";
            $html .= "&nbsp;";
            $html .= "<a class='btn-edit' href='".route('dashboard.meja.edit',$row->id)."'> <i class='fa fa-edit'></i></a>";
        return $html;
        })->rawColumns(['action','tersedia'])->make();

    }
    
}
