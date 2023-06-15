@extends('layouts.backend')


@section('main')


    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3 class="mt-3">Pembayaran Non tunai</h3>
                <a 
                    href="{{ route('dashboard.pengaturan.tambahTampil') }}"
                    id="button_tambah_pembayaran" 
                    class="btn btn-success"
                >
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>

            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pembayaran</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{  $count++  }}.</td>
                                <td>{{ $item->debit_name }}</td>
                                <td>{{ $item->pay_category }}</td>
                                <td>
                                    <a  onclick="return confirm('Apakah Anda Yakin menghapus {{ $item->debit_name }}?')"
                                        href="{{ route('dashboard.pengaturan.hapusPembayaran', [$item->id]) }}"
                                        class="btn btn-sm btn-danger"
                                    >
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                       @if (count($data) == 0)
                        <tr>
                            <td colspan="4" class="text-center">Data Tidak ada</td>
                        </tr>  
                       @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @error('success')
        <script>
            alert(`{{ $message }}`);
        </script>
    @enderror
    @error('fail')
        <script>
            alert(`{{ $message }}`);
        </script>
    @enderror

@endsection


@push('script')
<script>
    $('table').DataTable({
        responsive: true,
    })
</script>
@endpush