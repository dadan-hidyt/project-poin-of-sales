<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\KariawanRequest;
use App\Models\Kariawan;
use App\Services\KariawanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KariawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle("Manage Kariawan");
        return view('backend.kariawan.tampil', [
            'kariawan' => Kariawan::with('user')->get(),
        ]);
    }
    public function _getKarawan($id)
    {
        return Kariawan::findOrFail($id);
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id = null)
    {
        abort_if($id == null, 404);

        $this->setTitle("Edit Kariawan");
        return view('backend.kariawan.edit', [
            'karyawan' => $this->_getKarawan($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, KariawanService $kariawanService)
    {
        $old = $this->_getKarawan($id);
        $oldAvatar = $old->avatar;
        //rule
        $data = $request->only(['nik', 'nama', 'no_telp', 'alamat', 'jk']);
        $rules = [
            'nik' => 'required',
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'avatar' => 'file|mimes:png,jpg,gif'
        ];
        if ($request->nik !== $old->nik) {
            $rules['nik'] .= '|unique:tb_karyawan,nik';
        }
        $filename = $request->file('avatar') ? $request->file('avatar')->hashName() : '';
        //files
        $data['avatar'] = $request->file('avatar')
            ?  "storage/avatar/" . $data['nik'] . '/' . $filename
            : $oldAvatar;
        if ($old->update($data)) {
            if ($file = $request->file('avatar')) {
                if ($kariawanService->uploadHandle($request)) {
                    $oldAvatar = "app/public" . str_replace('storage', '', $oldAvatar);
                    if (file_exists(storage_path($oldAvatar))) {
                        unlink(storage_path($oldAvatar));
                        return redirect(route('dashboardkariawan.index'))->withErrors(['sukses' => "Data berhasil di update!"]);
                    }
                }
            }
            return redirect(route('dashboardkariawan.index'))->withErrors(['sukses' => "Data berhasil di update!"]);
        } else {
            return redirect(route('dashboardkariawan.index'))->withErrors(['gagal' => "Data gagal di update!"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $old = $this->_getKarawan($id);
        $oldNik = $old->nik;
        if($old->delete()) {
            $oldAvatar = "app/public/avatar/{$oldNik}/";
            rmdir(storage_path($oldAvatar));
            return redirect(route('dashboardkariawan.index'))->withErrors(['sukses' => "Data berhasil di hapus!"]);
        } 
        return redirect(route('dashboardkariawan.index'))->withErrors(['sukses' => "Data gagal di hapus!"]);
    }
}
