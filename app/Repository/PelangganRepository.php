<?php

namespace App\Repository;

use App\Models\Pelanggan;
use Yajra\DataTables\DataTables;

class PelangganRepository
{
    public function __construct(
        public $pelanggan = new Pelanggan()
    ) {
    }
    public function getDataTable()
    {
        return DataTables::of($this->pelanggan->latest()->get())->addIndexColumn()
            ->addColumn('action', function ($row) {
                $html = "<a class='btn-delete' onclick='return confirm('Apakah anda yakin?')' href='" . route('dashboard.product.item.delete', $row->id) . "'> <i class='fa fa-trash'></i></a>";
                $html .= "&nbsp;";
                $html .= "<a class='btn-edit' href='" . route('dashboard.product.item.update', $row->id) . "'> <i class='fa fa-edit'></i></a>";
                return $html;
            })->rawColumns(['action'])->make();
    }
}
