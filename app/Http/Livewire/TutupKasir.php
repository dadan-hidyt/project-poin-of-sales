<?php

namespace App\Http\Livewire;

use App\Models\Kasir;
use PDF;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TutupKasir extends Component
{
    public $kasir;
    public $jumlah_kas;
    public $sisa_kas = null;
    public $kas_akhir;
    public $pin;
    public $total_transaksi = 0;
    public $print_type = null;
    public $data = [];
    public $kas_awal = 0;
    public function mount()
    {
        $this->kas_awal = (int)str_replace('.', '', $this->kasir->kas_awal);
        //mendaptkan jummlah pendaptan kasir yang login
        try {
            $data = [];
            $data['jumlah_pendapatan'] = 0;
            $total = Transaksi::where('id_kasir', $this->kasir->id)->get();
            foreach ($total as $val) {
                $data['jumlah_pendapatan'] += $val->jumlah;
            }
            $data['jumlah_pendapatan'] = $data['jumlah_pendapatan'];
            $data['total_transaksi'] = $this->kasir->transaksi->count();
            $this->data = $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function setSisaKas()
    {
        if ($this->pin != $this->kasir->user->login_token) {
            $this->sisa_kas = null;
            $this->dispatchBrowserEvent('pin_salah');
        }
    }
    public function selesai()
    {
        $this->kasir->waktu_keluar = now();
        $this->kasir->sisa_kas = (int) str_replace('.', '', $this->sisa_kas);
        $this->kasir->total_keseluruhan = $this->data['jumlah_pendapatan'] + (int)str_replace('.', '', $this->sisa_kas);

        if ($this->kasir->save()) {
            switch ($this->print_type) {
                case 'laporan_only':
                    $pdf = PDF::loadView('kasir.transaksi.laporan.laporan_akhir_kasir', [
                        'kasir' => $this->kasir,
                        'jumlah_pendapatan' => $this->data['jumlah_pendapatan'],
                        'total_transaksi' => $this->data['total_transaksi'],
                        'kas_awal' => $this->kas_awal,
                        'sisa_kas' => (int)str_replace('.', '', $this->sisa_kas),
                    ]);
                    $this->dispatchBrowserEvent("SUKSESS");
                    return response()->streamDownload(function () use ($pdf) {
                        return print($pdf->output());
                    }, uniqid().'.pdf');
                    break;
                case 'produk_terjual':
                    $pdf = PDF::loadView('kasir.transaksi.laporan.laporan_akhir_kasir_produk', [
                        'kasir' => $this->kasir,
                        'jumlah_pendapatan' => $this->data['jumlah_pendapatan'],
                        'total_transaksi' => $this->data['total_transaksi'],
                        'kas_awal' => $this->kas_awal,
                        'sisa_kas' => (int)str_replace('.', '', $this->sisa_kas),
                        'transaksi' => $this->kasir->transaksi,
                    ]);
                    $this->dispatchBrowserEvent("SUKSESS");
                    return response()->streamDownload(function () use ($pdf) {
                        return print($pdf->output());
                    }, uniqid().'.pdf');
                    break;     
            }

        }
    }
    public function render()
    {
        return view('livewire.tutup-kasir');
    }
}
