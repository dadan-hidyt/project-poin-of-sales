<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Pembayaran;
use Illuminate\Validation\Rule;
use App\Models\SatuanBarang;
use App\Models\PengaturanStruk;
use App\Models\PembayaranNonTunaiModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function view()
    {
        $this->setTitle("Pengaturan Struk");
        return view('backend.pengaturan.struk');
    }

    public function updateStruk(Request $request)
    {

        $request->validate([
            'no_telp' => [
                'sometimes',
                Rule::unique('struk_setting')->ignore(1),
            ],
            'alamat' => 'max:150,',
            'email' => 'email',
            'catatan' => 'max:225,'
        ]);

        $request->merge([
            'active' => 'Y'
        ]);

        $attr = $request->all();

        // dd($attr);

        // Melakukan Update Data

        $update = PengaturanStruk::find(1)
            ->update($attr);
        if ($update) {
            return redirect()->back()->with('success', 'Data Berhasil Di update');
        } else {
            return redirect()->back()->withErrors('fail', 'Data Gagal Di Update');
        }
    }

    public function satuanBarang()
    {
        $this->setTitle('Satuan Barang');
        return view('backend.pengaturan.satuan_barang', [
            'satuan' => SatuanBarang::all(),
        ]);
    }

    public function web()
    {
        $this->setTitle('Pengaturan Website');
        return view('backend.pengaturan.infowebsite');
    }

    public function pajak()
    {
        $this->setTitle('Pengaturan Pajak Pertransaksi');
        return view('backend.pengaturan.pajak_transaksi');
    }


    public function daftarPembayaran()
    {
        $data = PembayaranNonTunaiModel::all();
        $this->setTitle('Pembayaran Non Tunai');
        return view('backend.pengaturan.pembayaranNontunai', [
            'data' => $data
        ]);
    }

    public function tambahPembayaran()
    {
        $this->setTitle('Tambah Pembayaran Non Tunai');
        return view('backend.pengaturan.pages.tambahPembayaran');
    }

    public function tambahProsess(Request $request)
    {

        // Validation

        $request->validate([
            'debit_name' => 'required|unique:tb_pembayaran_non_tunai',
            'pay_category' => 'required'
        ]);

        $duplicate = PembayaranNonTunaiModel::where('debit_name', $request->debit_name)->first();

        if (!$duplicate) {
            PembayaranNonTunaiModel::create([
                'debit_name' => $request->input('debit_name'),
                'pay_category' => $request->input('pay_category')
            ]);

            return redirect()->back()->withErrors(['success' => "Data Berhasil Ditambahkan!"]);
        }

        return redirect()->back()->withErrors(['error' => "Data Gagal Ditambahkan!"]);
    }

    public function hapusPembayaran($id)
    {

        // find Data with id

        $data = PembayaranNonTunaiModel::find($id);

        $delete = $data->delete();

        if ($delete) {
            return redirect()->back()->withErrors(['success' => 'data berhasil Dihapus']);
        } else {
            return redirect()->back()->withErrors(['fail' => 'Data Gagal Dihapus']);
        }

        $this->setTitle('hapusPembayaran');
    }
}
