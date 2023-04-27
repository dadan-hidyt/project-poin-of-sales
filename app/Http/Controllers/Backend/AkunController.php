<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle('Akun');
        return view('backend.akun.index', [
            'akun' =>  User::with(['karyawan'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle("Buat Baru");
        return view('backend.akun.tambah');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->setTitle("Edit");
        $user = User::findOrFail($id);
        return view('backend.akun.edit',['akun' => $user]);
    }

   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $akun = User::findOrFail($id);
        
        if ( $akun->delete() ) {
            return redirect(route('dashboard.akun.index'))->withErrors([
                'feedback' => [
                    'type' => 'success',
                    'message' => "Data berhasil di hapus!"
                ]
            ]);
        } else {
            return redirect(route('dashboard.akun.index'))->withErrors([
                'feedback' => [
                    'type' => 'danger',
                    'message' => "Data gagal di hapus!"
                ]
            ]);
        }
    }
}
