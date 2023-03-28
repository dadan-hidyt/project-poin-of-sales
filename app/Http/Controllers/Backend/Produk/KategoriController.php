<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Models\Product;
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
    public function datatable(Request $request){
        if($request->ajax()){
           return $this->kategoriProdukRepository->getDataTables();
        }
    }
    public function index(){
        $this->setTitle('Kategori Produk');
        return view('backend.produk.kategori.tampil');
    }
    public function delete( $id_kategori = null ){
        $kategori = KategoriProduk::findOrFail($id_kategori);
        $kategoriOnProduct = Product::whereHas('kategori',function($x) use($id_kategori) {
            return $x->where('id_kategori_produk',$id_kategori);
        })->with(['product']);
        
        /**
         * Jika kategori di gunakan oleh produk maka kategori tidak bisa
         * di hapus
         */
        if($kategoriOnProduct->exists()) {
            return redirect()->back()->withErrors(['gagal_hapus_kategori'=>'Kategori <b>'.$kategori->nama_kategori.' </b>di gunakan! Untuk saat ini hanya bisa di edit!']);
        }
        if($kategori->delete()){
            return redirect()->back()->withErrors(['berhasil_hapus_kategori'=>'Kategori <b>'.$kategori->nama_kategori."</b> Berhasil di hapus"]);
        } else {
            return redirect()->back()->withErrors(['gagal_hapus_kategori'=>'Kategori <b>'.$kategori->nama_kategori."</b> Gagal di hapus! Silahkan cobalagi"]);
        }
        
    }
}
