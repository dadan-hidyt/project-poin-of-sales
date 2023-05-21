@extends('layouts.backend')

@section('main')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('sukses'))
                <p class="alert alert-success">
                    {{ session()->get('sukses') }}
                </p>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="form-informasi-reward">
                        <div class="d-flex align-items-center justify-content-between pb-4 border-1 border-bottom" style="margin-bottom: 20px;">
                            <span class="h3 fw-bolder">Daftar Poin</span>
                            <a href="{{ route('dashboard.poin_reward.setting') }}" class="btn btn-sm btn-success" style="margin-top : -10px;">
                                <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/General/Settings-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                <span>Pengaturan Reward</span>
                            </a>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poin as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->status == 'Y' ? 'Aktif' : 'Tidak Aktif' }}</td>
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
                                                @foreach (json_decode($item->hari) as $item2)
                                                    <span class="badge badge-primary">{{ $item2 }}</span> &nbsp;
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Apakah Anda Yakin?')"
                                                href="{{ route('dashboard.poin_reward.pembelian.delete', $item->id) }}"
                                                class="btn btn-sm btn-warning">Delete</a>
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
            responsive: true,
        })
    </script>
@endpush
