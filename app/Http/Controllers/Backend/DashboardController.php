<?php
/**
 * @author dadan hidyt <dadanhidyt@gmail.com>
 * @package AdminController
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function transaksiHariIni($key){
        $data = (new Transaksi())->transaksiHariIni()[$key] ?? 0;
        return $data;
    }
    public function hitungPendapatanTransaksi(){
        return (new Transaksi)->hitungJumlahSemuaTransaksi();
    }
    public function __invoke(){
        $this->setTitle("Wellcome Di dashboard");
        return view('backend.welcome', [
            'total_semua_transaksi' => Transaksi::count(),
            'total_transaksi_hari_ini' => $this->transaksiHariIni('total'),
            'penghasilan_transaksi_hari_ini' => $this->transaksiHariIni('jumlah'),
            'total_pendapatan_semua_transaksi' => $this->hitungPendapatanTransaksi(),
        ]);
    }
}
