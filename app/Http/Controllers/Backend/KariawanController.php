<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\KariawanRequest;
use App\Models\Kariawan;
use App\Services\KariawanService;
use Illuminate\Http\Request;

class KariawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle("Manage Kariawan");
        return view('backend.kariawan.tampil',[
            'kariawan' => Kariawan::with('user')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle('Buat Kariawan');
        return view('backend.kariawan.buat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KariawanRequest $kariawanRequest, KariawanService $kariawanService, Kariawan $kariawan)
    {
        $data = $kariawanRequest->validated();
        $data['avatar'] = $kariawanRequest->file('avatar')
            ?  "storage/avatar/" . $data['nik'] . '/' . $kariawanRequest->file('avatar')->hashName()
            : null;
        $insert = $kariawan->insert($data);
        if ($insert) {
            if ($kariawanRequest->file('avatar')) {
                $kariawanService->uploadHandle($kariawanRequest);
            }
            return redirect(route('dashboardkariawan.index'))->withErrors(['sukses' => "Data berhasil di tambahkan!"]);
        } else {
            return redirect(route('dashboardkariawan.index'))->withErrors(['gagal' => "Data gagal di tambahkan!"]);
        }
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
