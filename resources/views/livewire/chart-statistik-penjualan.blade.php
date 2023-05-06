<div class="card card-custom">
    <div class="card-header bg-primary">
        <div class="card-title text-white">Statistik Per Jam</div>
        
    </div>
    <div class="card-body">
        <div style="width: 100%" id="penjualan_perjam">
            
        </div>
    </div>
</div>
@push('script') 

<script>
var chart = function () {
    const apexChart = "#penjualan_perjam";

    var options = {
          series: [
            {
          name: 'Penjualan',
          data: {!! json_encode(array_values($chartData)) !!}
        }
    ],
         
        chart: {
          height: 350,
          type: 'bar',
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
          categories: {!! json_encode(array_keys($chartData)) !!},
          tickPlacement: 'on'
        },
        yaxis: {
          title: {
            text: 'Total Penjualan',
          },
          min : 0,
        },
        
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
          y: {
            formatter: function (val) {
              return `${val} Transaksi`
            }
          }
        }
        };
    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
}

chart()
 </script>
@endpush
