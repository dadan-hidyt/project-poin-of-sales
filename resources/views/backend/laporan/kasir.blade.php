@extends('layouts.backend')
@section('main')
    <div class="card card-custom">
        <div class="card-header py-4 border-1 border-bottom">
            <div class="h3 card-title">Laporan Penjualan Per Kasir</div>

        </div>
        <div class="card-body">
            <table class="table table-head-custom table-head-bg table-vertical-center table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kasir</th>
                        <th>Waktu</th>
                        <th>Kas Awal</th>
                        <th>Kas Akhir</th>
                        <th>Pendapatan</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kasir as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->nama_user }}</td>
                            <td>{{ $item->waktu_masuk }} Sampai {{ $item->waktu_keluar ?? '-' }}</td>
                            <td>Rp. {{ formatRupiah($item->kas_awal) }}</td>
                            <td>Rp. {{ formatRupiah($item->sisa_kas) ?? 0 }}</td>
                            <td>Rp. {{ formatRupiah($item->total_keseluruhan) ?? 0 }}</td>
                            <td>
                                <a href='{{ route('dashboard.laporan.kasir.print',$item->id) }}?type=download' class='btn btn-secondary btn-sm btn-outline'><i class="fa fa-download"></i></a>
                                <a href='{{ route('dashboard.laporan.kasir.print',$item->id) }}?type=print' class='btn btn-primary btn-sm btn-outline'><i class="fa fa-print"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
