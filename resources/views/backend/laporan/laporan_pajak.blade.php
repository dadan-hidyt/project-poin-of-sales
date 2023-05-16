@extends('layouts.backend')
@section('main')
<div class="card card-custom statistik-info">
    <div class="card-header">
        <h4 class="card-title">Laporan Pajak</h4>
        <div class="card-toolbar">
            <a class="btn btn-primary btn-sm" href="{{ route('dashboard.laporan.pajak.report.all') }}">Report All</a>
        </div>
    </div>
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
                        <th>ID</th>
                        <th>Kode Transaksi</th>
                        <th>Total Pajak</th>
                        <th>Tanggal</th>
                        <th>Report</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total_pajak = 0;
                    @endphp
                    @empty(!$transaksi)
                        @foreach($transaksi as $item)
                        @php
                            $total_pajak += $item->total_pajak;
                        @endphp
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_transaksi }}</td>
                                <td>Rp. {{ formatRupiah($item->total_pajak) ?? 0 }}</td>
                                <td>{{ $item->tanggal_order }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('dashboard.laporan.pajak.report',$item->kode_transaksi) }}">Report</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <h4 class="mt-3">Total Semua Pajak: Rp. {{ formatRupiah($total_pajak) ?? 0 }}</h4>

        </div>

    </div>
</div>
@endsection

@push('script')
<script>
    const table = $("#tabel_produk").DataTable({
            responsive: true,
            processing: true,
          
        
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