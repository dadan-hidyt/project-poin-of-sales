<?php

namespace App\Http\Livewire;

use App\Models\Kasir;
use PDF;
use App\Models\Transaksi;
use Carbon\Carbon;
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
    public $byMetodePembayaran = [];
    public $print_type = null;
    public $data = [];
    public $pin_benar = false;
    public $kas_awal = 0;
    public function penghasilanByMetodePembayaran()
    {
        $id_kasir = $this->kasir->id;
        $cash = formatRupiah(Transaksi::where(['metode_pembayaran' => 'cash', 'id_kasir' => $id_kasir])->sum('jumlah'));
        $ewalet = formatRupiah(Transaksi::where(['metode_pembayaran' => 'ewalet', 'id_kasir' => $id_kasir])->sum('jumlah'));
        $debit = formatRupiah(Transaksi::where(['metode_pembayaran' => 'debit', 'id_kasir' => $id_kasir])->sum('jumlah'));
        return compact('cash', 'ewalet', 'debit');
    }
    public function mount()
    {   
        $this->byMetodePembayaran = $this->penghasilanByMetodePembayaran();
        $this->kas_awal = (int)str_replace('.', '', $this->kasir->kas_awal);
        $this->sisa_kas = $this->kasir->sisa_kas;
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
        $sisa_kas = (int)str_replace('.', '', $this->sisa_kas);
        if ($this->pin != $this->kasir->user->login_token) {
            $this->pin_benar = null;
            $this->dispatchBrowserEvent('error', "Pin yang anda masukan salah");
        } else {
            $this->pin_benar = true;
        }

        if ($sisa_kas  > $this->kas_awal) {
            $this->pin_benar = null;
            $this->dispatchBrowserEvent('error', "Sisa kas melebihi kas awal!");
        } else {
            $this->pin_benar = true;
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
                        'byMetodePembayaran' => $this->byMetodePembayaran,
                    ]);
                    $this->dispatchBrowserEvent("suksess_tutup");
                    return response()->streamDownload(function () use ($pdf) {
                        return print($pdf->output());
                    }, uniqid("LAP-".Carbon::now()->format('d-m-Y-h-i-s')) . '.pdf');
                    break;
                case 'produk_terjual':
                    $pdf = PDF::loadView('kasir.transaksi.laporan.laporan_akhir_kasir_produk', [
                        'kasir' => $this->kasir,
                        'jumlah_pendapatan' => $this->data['jumlah_pendapatan'],
                        'total_transaksi' => $this->data['total_transaksi'],
                        'kas_awal' => $this->kas_awal,
                        'sisa_kas' => (int)str_replace('.', '', $this->sisa_kas),
                        'transaksi' => $this->kasir->transaksi,
                        'byMetodePembayaran' => $this->byMetodePembayaran,
                    ]);
                    $this->dispatchBrowserEvent("suksess_tutup");
                    return response()->streamDownload(function () use ($pdf) {
                        return print($pdf->output());
                    }, uniqid("LAP-".Carbon::now()->format('d-m-Y-h-i-s')) . '.pdf');
                    break;
            }
        }
    }
    public function render()
    {
        return view('livewire.tutup-kasir');
    }
}
