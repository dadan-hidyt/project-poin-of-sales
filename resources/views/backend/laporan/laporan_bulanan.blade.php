@extends('layouts.backend')
@php
    $last = (new DateTime($last))->format("Y");
    $first = (new DateTime($first))->format("Y");
@endphp
@section('main')
    <div class="card card-custom">
        <div class="card-header py-4 border-1 border-bottom">
            <div class="h3 card-title">Statistik Penjualan Perbulan</div>

        </div>
        <div class="card-body">
            <div class="form-tahun mb-3">
                <select name="tahun" id="" class="form-control">
                    <option value="">--Pilih Tahun</option>
                    @for ($i = $first; $i>=$last;$i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="chart border rounded">
                <div id="chart-bulanan"></div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
            const apexChart = "#chart-bulanan";

            var options = {
                series: [],

                chart: {
                    height: 350,
                    type: 'line',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 20,
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 1
                },

                grid: {
                    row: {
                        colors: ['#fff', '#f2f2f2']
                    }
                },
                xaxis: {
                    labels: {
                        rotate: -45
                    },
                    categories: {!! json_encode(array_keys($bulan)) !!},
                    tickPlacement: 'on'
                },
                noData:"Loading...",
                yaxis: [{
                    title: {
                        text: 'Total Transaksi',
                    },
                    min: 0,
                },
                {
                    opposite: true,
                    title: {
                        text: 'Total Pendapatan',
                    },
                    min: 0,
                }],

                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        type: "horizontal",
                        shadeIntensity: 0.25,
                        gradientToColors: undefined,
                        inverseColors: true,
                        opacityFrom: 0.85,
                        opacityTo: 0.85,
                        stops: [50, 0, 100]
                    },
                },
                tooltip: {
                    y: [{
                        formatter: function(val) {
                            return `${val} Transaksi`
                        }
                    },{
                        formatter: function(val) {
                            return `Rp. ${val} Rupiah`
                        }
                    }]
                }
            };
            var chart = new ApexCharts(document.querySelector(apexChart), options);


            $.get("{{ route('dashboard.laporan.bulanan.chart') }}",function(res){
                    chart.updateSeries([
                       {
                        name : "Total Penjualan",
                        data : res.total_transaksi,
                       },
                       {
                        name : "Total Penjualan",
                        data : res.pendapatan,
                       }
                    ])
                })


            $("select[name=tahun]").on('change',(e)=>{
    
                $.get("{{ route('dashboard.laporan.bulanan.chart') }}?tahun="+e.target.value,function(res){
                    chart.updateSeries([
                       {
                        name : "Total Penjualan",
                        data : res.total_transaksi,
                       },
                       {
                        name : "Total Pendapatan",
                        data : res.pendapatan,
                       }
                    ])
                })
            })

            chart.render();
       
    </script>
@endpush
