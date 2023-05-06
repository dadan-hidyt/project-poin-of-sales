<?php

namespace App\Http\Livewire;

use App\Models\Transaksi;
use Livewire\Component;

class ChartStatistikPenjualan extends Component
{
    public $data = [];
    public $date;
    public $chartData = [];
    protected $listeners = ['reload'];
    public function filter(){
        $this->emit('reload');
    }

    public function reload(){
        $this->chartData = $this->chart();
        
    }
  
    public function getTimeData(){

        $startTime  = new \DateTime('00:00');
        $endTime    = new \DateTime('23:55');
        $timeStep   = 60;
        $timeArray  = array();
        
        while($startTime <= $endTime)
        {
            $timeArray[] = $startTime->format('H:i');
            $startTime->add(new \DateInterval('PT'.$timeStep.'M'));
        }
        
        return $timeArray;
    }
    public function chart(){
        $dataTime = $this->getTimeData();
        $data = [];
        foreach ($dataTime as $time) {
            $h = abs(explode(':',$time)[0]);
            $data[$time] = Transaksi::whereDate('tanggal_order', $this->date ? date('Y-m-d',strtotime($this->date)) : date('Y-m-d'))->whereRaw("DATE_FORMAT(tanggal_order,'%H') = ?", [$h])->count();
        }
       return $data;
    }
    public function mount(){
       $this->chartData = $this->chart();
    }

    public function render()
    {
        return view('livewire.chart-statistik-penjualan');
    }
}
