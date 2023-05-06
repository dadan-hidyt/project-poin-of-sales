<div class="card card-custom">
    <div class="card-header bg-primary">
        <div class="card-title text-white">Statistik Per Jam</div>
        <div id="filter" class="card-toolbar">
            <form method='post' wire:key='form-app' action="" wire:submit.prevent='filter'>
            <div class="row">
                    <div class="col-4">
                        <input wire:model.defer='date' type="date" class="form-control">
                    </div>
                   
                    <div class="col-4">
                        <button id="filter" class="btn btn-warning">FILTER</button>
                    </div>
                </div>
                </form>
                
        </div>
    </div>
    <div wire:ignore  class="card-body">
        <div style="width: 100%" wire:ignore.self id="chart_1" > </div>
    </div>
</div>
@push('script') 

<script>
$("#filter").on('click',()=>{
    Livewire.emit('reload');
})
var demo2 = function () {
    const apexChart = "#chart_1";
    var options = {
        series: [
            {
                name: 'Total Penjualan',
                data: {!! json_encode(array_values($chartData)) !!}
            }
        ],
        scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true,
                 userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }

                 },
             }
         }],
     },
        chart: {
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },

        xaxis: {
            type: 'time',
            categories: {!! json_encode(array_keys($chartData)) !!}
        },
        yaxis: {
            title: {
                text: "Total Penjualan Perjam"
            },
            min: 1
        },

        tooltip: {
            x: {
                format: 'HH:mm'
            }
        },
        colors: ['green']
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
}

demo2()
 </script>
@endpush
