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
    public function hitungPendapatanTransaksi(){
        return (new Transaksi)->hitungJumlahSemuaTransaksi();
    }
    public function __invoke(){
        $this->setTitle("Wellcome Di dashboard");
        return view('backend.welcome', [
            'total_semua_transaksi' => Transaksi::count(),
            'total_pendapatan_semua_transaksi' => $this->hitungPendapatanTransaksi(),
        ]);
    }
}
