<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use App\Models\VarianProduk;
use App\Repository\ItemProdukRepository;
use Illuminate\Http\Request;

class ProdukVarian extends Controller
{
    public function datatable(ItemProdukRepository $itemProdukRepository){
       return $itemProdukRepository->getDataTablesVariant();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle("Produk Varian");
        return view('backend.produk.varian.tampil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle("Tambah Produk");
        return view('backend.produk.varian.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->setTitle("Edit Varian");
        $varian = VarianProduk::findOrFail($id);
        return view('backend.produk.varian.edit',['varian' => $varian]);
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $varian = VarianProduk::findOrFail($id);
        if($varian->delete()) {
            return redirect(route('dashboard.produk.varian'))->withErrors(['feedback'=>[
                'type' => 'success',
                'message' => "data selesai di hapus",
            ]]);
        } else {
            return redirect(route('dashboard.produk.varian'))->withErrors(['feedback'=>[
                'type' => 'error',
                'message' => "data gagal di hapus",
            ]]);
        }
    }
}
