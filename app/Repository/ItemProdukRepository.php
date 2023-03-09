<?php
namespace App\Repository;

use App\Models\Product;
use DataTables;

class ItemProdukRepository
{
    public function getDataTables()
    {
        $data = Product::with(['kategori', 'varian'])->select(
            'nama_produk',
            'stok',
            'sku',
            'id_varian',
            'harga_jual',
            'harga_beli',
            'satuan',
            'pajak',
            'id_kategori_produk',
        )->latest()->get();
        /**
         * Untuk render
         */
        return DataTables::of($data)->addIndexColumn()
            ->addColumn('harga_jual', function ($row) {
                return "Rp. " . number_format($row->harga_jual, 2, '.', ',');
            })
            ->addColumn('satuan', function ($row) {
                return $row->satuan;
            })
            ->addColumn('nama_produk', function ($row) {
                return $row->nama_produk;
            })
            ->addColumn('harga_beli', function ($row) {
                return "Rp. " . number_format($row->harga_beli, 2, '.', ',');
            })
            ->addColumn('kategori', function ($row) {
                return $row->kategori->nama_kategori;
            })->addColumn('action', function () {
            return 'dadan';
        })->rawColumns(['action'])->make();
    }
}