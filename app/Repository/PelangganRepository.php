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
            ->addColumn('kode_pelanggan', function ($row) {
                return (string) $row->kode_pelanggan;
            })
            ->addColumn('action', function ($row) {
                $html = "<a class='btn-delete' onclick=\"return confirm('Apakah anda yakin?')\" href='" . route('dashboard.pelanggan.delete', $row->id) . "'> <i class='fa fa-trash'></i></a>";
                $html .= "&nbsp;";
                $html .= "<a class='btn-edit' href='" . route('dashboard.pelanggan.update', $row->id) . "'> <i class='fa fa-edit'></i></a>";
                return $html;
            })->rawColumns(['action'])->make();
    }
    public function getById(int $id = null)
    {
        if ($id === null) {
            return false;
        }
        return Pelanggan::find($id);
    }
}
