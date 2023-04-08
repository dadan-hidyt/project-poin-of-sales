<?php
namespace App\Repository;

use App\Models\Kupon;
use Yajra\DataTables\DataTables;

class KuponRepository{

    public function getDatatables(){
        $dataKupon = Kupon::with('produk')->get();
        dd($dataKupon);
        return DataTables::make($dataKupon);
    }
}