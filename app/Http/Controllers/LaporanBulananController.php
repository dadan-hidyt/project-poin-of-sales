<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use DateInterval;
use DatePeriod;
use Illuminate\Http\Request;

class LaporanBulananController extends Controller
{
    public function __invoke()
    {
        $this->setTitle("Laporan Bulanan");

        //last
        $last = Transaksi::orderBy('tanggal_order',"ASC")->first()->tanggal_order;
        $first = Transaksi::orderBy('tanggal_order',"DESC")->first()->tanggal_order;
        return view('backend.laporan.laporan_bulanan', [
            'bulan' => $this->getBulan(),
            'last'=>$last,
            'first' => $first,
        ]);
    }
    public function getAjaxChart(){
        $data['total_transaksi'] = [];
        $data['pendapatan'] = [];
        $tahun = request()->tahun ?? date('Y');
        foreach ($this->getBulan() as $item => $value) {
            $data['total_transaksi'][] = Transaksi::whereRaw("DATE_FORMAT(tanggal_order,'%Y') = ? AND DATE_FORMAT(tanggal_order,'%m') = ?",[$tahun,$value])->count();
            $sum = Transaksi::whereRaw("DATE_FORMAT(tanggal_order,'%Y') = ? AND DATE_FORMAT(tanggal_order,'%m') = ?",[$tahun,$value])->sum('jumlah');
            if ( !$sum ) {
                $sum = 0;
            }  else {
                $sum = intval($sum);
            }
            $data['pendapatan'][] = $sum;
            
        }

        return response()->json($data);
    }
    public function getBulan(){
        $start = date_create('1-1-'.date('Y'));

        $end = date_create('30-12-'.date('Y'));
        $data = [];
        $period = new DatePeriod($start,DateInterval::createFromDateString('+1month'),$end);
        foreach($period as $item) {
            $data[$item->format('M')] = $item->format('m');
        }

       return $data;
    }
}
