<?php

namespace App\Http\Controllers\Backend\Promo;

use App\Http\Controllers\Controller;
use App\Models\Kupon;
use App\Models\Product;
use App\Repository\KuponRepository;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    public function index()
    {
        $this->setTitle("Manage Kupon");
        return view("backend.kupon.tampil");
    }
    public function datatable(KuponRepository $kuponRepository)
    {
        return $kuponRepository->getDatatables();
    }
    public function update($id_kupon = null, Kupon $kupon)
    {
        abort_if($id_kupon === null, 404);
        return view('backend.kupon.edit', [
            'kupon' => Kupon::find($id_kupon),
        ]);
    }
    public function delete($id_kupon = null, Kupon $kupon, Request $request)
    {
        abort_if($id_kupon == null, 404);
        $kupon = $kupon->findOrFail($id_kupon);
        if ($kupon->delete($id_kupon)) {
            return back()->withErrors(['sukses' => "Data berhasil di hapus!"]);
        } else {
            return back()->withErrors(['gagal' => "Data berhasil di hapus!"]);
        }
    }
}
?>