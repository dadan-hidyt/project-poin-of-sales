<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use App\Repository\KategoriProdukRepository;
use Illuminate\Http\Request;
class KategoriController extends Controller
{
    private $kategoriProdukRepository;
    public function __construct(){
        $this->kategoriProdukRepository = new KategoriProdukRepository();
    }
    /**
     * Ajak untuk mendapatkan kategori
     */
    public function getAjax(Request $request){
        $data = [];
        foreach($this->kategoriProdukRepository->getAll() as $item){
            $data[] = [
                'id' => $item->id,
                'text' => $item->nama_kategori,
            ];
        }
        return response()->json([
            'results' => $data,
        ]);
    }
}
