@extends('layouts.backend')

@section('main')

<style>
    html{
        scroll-behavior: smooth;
    }
</style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-informasi-reward">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="h3 fw-bolder">Daftar Poin</span>
                        </div>
                       
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Jumlah Poin</th>
                                    <th>Nama Poin Reward</th>
                                    <th>Deskripsi</th>
                                    <th>Min Pembelian(RP)</th>
                                    <th>Mulai</th>
                                    <th>Akhir</th>
                                    <th>Hari</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poin as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->status == 'Y' ? 'Aktif' : "Tidak Aktif" }}</td>
                                        <td>{{ $item->jumlah_poin }}</td>
                                        <td>{{ $item->nama_point_reward }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>Rp. {{ formatRupiah($item->min_pembelian) }}</td>
                                        <td>{{ $item->tanggal_mulai }}</td>
                                        <td>{{ $item->tanggal_berakhir }}</td>
                                        <td>
                                            @if ($item->semua_hari)
                                                <span class="text-info">Semua Hari</span>

                                            @else
                                                @foreach (json_decode($item->hari) as $item)
                                                     <span class="badge badge-primary">{{ $item }}</span> &nbsp;
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>
        $('table').DataTable({
            responsive : true,
        })
    </script>
@endpush