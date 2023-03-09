<?php
namespace App\Repository;

use App\Models\Product;
use DataTables;
use Nette\Utils\Html;

class ItemProdukRepository
{
    public function getDataTables()
    {
        //datatable
        $data = Product::with(['kategori', 'varian'])->select(
            'kode_produk',
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
            })->addColumn('action', function ($row) {
                $html = "<button class='btn btn-delete btn-sm btn-danger' data-href='".$row->kode_produk."'> <i class='fa fa-trash'></i></button>";
                $html .= "&nbsp;";
                $html .= "<button class='btn btn-sm btn-info' data-href='".$row->kode_produk."'> <i class='fa fa-edit'></i></button>";
            return $html;
        })->rawColumns(['action'])->make();
    }
}