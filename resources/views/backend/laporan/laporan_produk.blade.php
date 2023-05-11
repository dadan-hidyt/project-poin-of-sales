@extends('layouts.backend')
@section('main')
<div class="card statistik-info">
    <div class="card-body">
        {{-- <div class="col-12">
            <h3>FILTER</h3>
            <div class="col-12">
                <div class="form-group row">
                    <label class="col-form-label">Filter Tanggal</label>
                    <div class="col-12" id="kt_daterangepicker_2">
                        <input type='text' class="form-control" readonly placeholder="Select date range" />
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="col-12">

            <table id="tabel_produk"
                class="table able table-head-custom table-head-bg table-vertical-center table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Varian</th>
                        <th>Sisa Stok</th>
                        <th>Terjual</th>
                        <th>Pendapatan</th>
                    </tr>
                </thead>
            </table>

        </div>

    </div>
</div>
@endsection

@push('script')
<script>
    const table = $("#tabel_produk").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            onLanguage: {
                sProcessing: true,
            },
            ajax: {
                url: "{{route('dashboard.laporan.produk.datatable')}}",
                method: "POST",
                data: (d) => {
                    d._token = "{{ csrf_token() }}";
                },
                error: function(x,y) {
                    Swal.fire({
                        icon : 'error',
                        title : x.statusText,
                        text : "Ada kesalahan saat meminta data",
                    })
                }
            },
            columns: [
                {
                    data: 'nama_produk',
                    name: 'nama_produk',
                },
                {
                    data: 'stok',
                    name: 'stok',
                },
                {
                    data: 'harga',
                    name: 'harga',
                },
                {
                    data: 'varian',
                    name: 'varian',
                },
                {
                    data: 'sisa_stok',
                    name: 'sisa_stok',
                },
                {
                    data: 'terjual',
                    name: 'terjual',
                },
                {
                    data: 'pendapatan',
                    name: 'pendapatan',
                },
                
                
            ]

        })
        //date range picker
        // $('#kt_daterangepicker_2').daterangepicker({
        //     buttonClasses: ' btn',
        //     applyClass: 'btn-info',
        //     cancelClass: 'btn-danger',
        //     ranges: {
        //        'Hari Ini': [moment(), moment()],
        //        'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //        '7 Hari Yang Lalu': [moment().subtract(6, 'days'), moment()],
        //        '30 Hari Yang Lalu': [moment().subtract(29, 'days'), moment()],
        //        'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
        //        'Bulan Lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //     }
        // }, function(start, end, label) {
        //     table.ajax.url(`{{route('dashboard.laporan.produk.datatable')}}?start=${start}&end=${end}`).load()
        //     $('#kt_daterangepicker_2 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        // });
</script>
@endpush