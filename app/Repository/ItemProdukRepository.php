<?php

namespace App\Repository;

use App\Models\Product;
use App\Models\VarianProduk;
use Nette\Utils\Html;
use Yajra\DataTables\DataTables;

class ItemProdukRepository
{
    public function getDataTables()
    {
        //datatable
        $data = Product::with(['kategori', 'varian'])->select(
            'kode_produk',
            'id',
            'nama_produk',
            'stok',
            'sku',
            'id_varian',
            'harga_jual',
            'harga_modal',
            'satuan',
            'pajak',
            'id_kategori_produk',
        )->latest()->get();
        /**
         * Untuk render
         */
        return DataTables::of($data)->addIndexColumn()
            ->addColumn('harga_jual', function ($row) {
                return "Rp. " . formatRupiah($row->harga_jual);
            })
            ->addColumn('satuan', function ($row) {
                return $row->satuan;
            })
            ->addColumn('nama_produk', function ($row) {
                return $row->nama_produk;
            })
            ->addColumn('harga_modal', function ($row) {
                return "Rp. " . formatRupiah($row->harga_modal);
            })
            ->addColumn('kategori', function ($row) {
                return $row->kategori->nama_kategori;
            })->addColumn('action', function ($row) {
                $html = "<a class='btn-delete' onclick='return confirm('Apakah anda yakin?')' href='" . route('dashboard.product.item.delete', $row->id) . "'> <i class='fa fa-trash'></i></a>";
                $html .= "&nbsp;";
                $html .= "<a class='btn-edit' href='" . route('dashboard.product.item.update', $row->id) . "'> <i class='fa fa-edit'></i></a>";
                return $html;
            })->rawColumns(['action'])->make();
    }
    public function getDataTablesVariant()
    {
        $varian = VarianProduk::with(['item'])->get();
        return DataTables::of($varian)->addIndexColumn()
        ->addColumn('produk', function($row){
            return $row->item->nama_produk;
        })
        ->addColumn('terjual', fn()=>10)
        ->addColumn('action', function ($row) {
                $html = "<a class='btn-delete' onclick='return confirm(\"Apakah anda yakin?\")' href='" . route('dashboard.akun.varian.delete', $row->id) . "'> <i class='fa fa-trash'></i></a>";
                $html .= "&nbsp;";
                $html .= "<a class='btn-edit' href='" . route('dashboard.akun.varian.edit', $row->id) . "'> <i class='fa fa-edit'></i></a>";
                return $html;
            })->rawColumns(['action'])->make();
    }
}
