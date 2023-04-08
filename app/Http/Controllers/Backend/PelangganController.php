<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use App\Repository\PelangganRepository;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $this->setTitle("Pelanggan");
        return view('backend.pelanggan.tampil');
    }
    public function delete(Request $request, $id = null, Pelanggan $pelanggan)
    {
        $pelanggan = $pelanggan->findOrFail($id);
        $pelangganExists = Transaksi::whereHas('pelanggan', function ($row) use ($id) {
            return $row->where('id_pelanggan', $id);
        })->exists();

        if ($pelangganExists) {
            return redirect()->back()->withErrors(['warning' => "Pelanggan untuk saat ini hanya bisa di update!"]);
        }
        if ($pelanggan->delete($id)) {
            return redirect()->back()->withErrors(['success' => "Pelanggan berhasil di hapus!"]);
        } else {
            return redirect()->back()->withErrors(['error' => "Pelanggan gagal di hapus!"]);
        }
    }
    public function update($id_pelanggan = null, Request $request, PelangganRepository $pelangganRepository)
    {
        $this->setTitle("Edit Pelanggan");
        $pelanggan = $pelangganRepository->getById($id_pelanggan);
        if ($pelanggan->exists()) {
            return view('backend.pelanggan.edit', compact('pelanggan'));
        } else {
            abort(404);
        }
    }
    public function datatable(Request $request, PelangganRepository $pelangganRepository)
    {
        if ($request->ajax()) {
            return $pelangganRepository->getDataTable();
        } else {
            abort_if(404, 'Not Found');
        }
    }
}
