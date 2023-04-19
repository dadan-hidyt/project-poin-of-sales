<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Meja;
use App\Repository\MejaRepository;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function datatable(MejaRepository $mejaRepository){
        return $mejaRepository->getDataTables();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle("Daftar Meja");
        return view('backend.meja.tampil', [
            'meja' => Meja::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle("Tambah Meja");
        return view('backend.meja.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
