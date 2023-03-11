<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Product;
use App\Repository\ItemProdukRepository;
use App\Services\ItemProdukService;
use App\Traits\DataTablesTrait;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    use DataTablesTrait;
    private $itemRepository;
    public function __construct()
    {
        $this->itemRepository = new ItemProdukRepository();
    }
    public function delete(Request $request, Product $product, $kodeProduk = null)
    {
        if (is_null($kodeProduk)) {
            abort(404);
        }
        //proses
        $rowOfProduct = $product->with(['kategori', 'varian'])->findOrFail($kodeProduk);
        $existsData = [];
        $error = [];
        //relasi detail transaksi dengan produk ini
        //kita check dulu apakah ada data atau tidak
        $relasiDetailTransaksi = DetailTransaksi::whereHas('product', function ($q) use ($rowOfProduct) {
            $q->where('kode_produk', $rowOfProduct->kode_produk);
        })->with('product')->exists();
        //jika ada di detail transaksi berarti tidak bisa di hapus
        if ($relasiDetailTransaksi) {
            $error['gagal_hapus_produk'] = 'Data gagal dihapus! Kerena produk ini telah di gunakan oleh transaksi, Produk ini hanya dapat di edit untuk saat ini!';
        } else {
            if ($rowOfProduct->delete()) {
                $error['berasil_hapus_produk'] = 'Produk berhasil di hapus';
            } else {
                $error['gagal_hapus_produk'] = 'Kesalahan saat mengapus data';
            }
        }
        if (!empty($error)) {
            return back()->withErrors($error);
        } else {
            return back();
        }
    }
    public function index()
    {
        $this->deleteAction('index', 'home', 'data');
        return view('backend.produk.tampil');
    }
    public function getDatatables(Request $request)
    {
        if ($request->ajax()) {
            return $this->itemRepository->getDataTables();
        }
    }
}
