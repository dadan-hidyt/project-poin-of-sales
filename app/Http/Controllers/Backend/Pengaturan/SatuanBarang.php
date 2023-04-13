<?php

namespace App\Http\Controllers\Backend\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\SatuanBarang as SatuanBarangModel;
use Illuminate\Http\Request;
class SatuanBarang extends Controller
{
    public function delete(Request $request, $id = null)
    {
        abort_if($id === null, 404);
        if (SatuanBarangModel::find($id)->delete()) {
            return back()->withErrors(['delete_sukses' => "Satuan barang berhasil di hapus"]);
        } else {
            return back()->withErrors(['delete_gagal' => "Satuan barang gagal di hapus"]);
        }
    }
    public function create(){
        $this->setTitle('Tambah Satuan Barang');
        return view('backend.pengaturan.tambah_satuan_barang');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_satuan' => 'required|unique:satuan_barang,nama_satuan'
        ]);
        if (SatuanBarangModel::insert($request->only('nama_satuan'))) {
            return redirect()->route('dashboard.pengaturan.satuan_barang')->withErrors(['tambah_sukses' => "Satuan barang berhasil di tambah"]);
        } else {
            return redirect()->route('dashboard.pengaturan.satuan_barang')->withErrors(['tambah_gagal' => "Satuan barang berhasil di tambah"]);
        }
    }
}
