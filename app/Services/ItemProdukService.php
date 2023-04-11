<?php

namespace App\Services;

use App\Models\DetailTransaksi;
use App\Models\Product;
class ItemProdukService
{
    protected $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    //fungsi delete produk
    public function delete($kodeProduk)
    {
        $existsData = [];
        $rowOfProduct =    $this->product->with(['kategori', 'varian'])->find($kodeProduk);
        $relasiDetailTransaksi = DetailTransaksi::whereHas('product', function ($q) use ($rowOfProduct) {
            $q->where('kode_produk', $rowOfProduct->kode_produk);
        })->with('product')->exists();
        if ($relasiDetailTransaksi) {
            $existsData[] = "Detail Transaksi";
        }
        return "Produk ini merelasi ke data lain!";
    }
}
