<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use App\Models\VarianProduk;
use Illuminate\Http\Request;

class VarianController extends Controller
{
    public function getAjax(Request $request, VarianProduk $varianProduk){
        $data = $varianProduk->all();
        $response = [];
        $response[] = [
            'id' => 0,
            'text' => "Tidak Di Pilih",
        ];
        foreach ($data as $item){
            $response[] = [
                'id' => $item->id,
                'text' => $item->nama_varian,
            ];
        }
        return response()->json([
            'results' => $response,
        ]);    
    }
}
