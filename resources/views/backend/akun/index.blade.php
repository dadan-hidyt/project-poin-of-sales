@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header bg-primary">
        <div class="card-title text-white">List User</div>
        <div class="card-toolbar">
            <a class="btn btn-warning" href="{{ route('dashboardakun.create') }}">Tambah Baru</a>
        </div>
    </div>
    <div class="card-body">
        @error('feedback')
            <p class="alert alert-{{ $errors->get('feedback')['type'] }}">
                {{ $errors->get('feedback')['message'] }}</p>
        @enderror
        <table class="table table-head-custom table-head-bg table-vertical-center table-bordered" id="table">
          <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($akun as $item)
            <tr>
                <td>{{$item->nama_user}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->role}}</td>
                <td>
                  @empty(!$item->karyawan)
                    <details>
                        <summary>Lihat Detail</summary>
                        <div>
                            <span class="d-block">Nik: {{ $item->karyawan->nik }}</span>
                            <span class="d-block">Jenis Kelamin: {{ $item->karyawan->jk }}</span>
                            <span class="d-block">No Telp: {{ $item->karyawan->no_telp }}</span>
                        </div>
                    </details>
                    @else
                    <span class="text-warning">NO SET</span>
                  @endempty
                </td>
                <td class="text-center">
                    <a href="{{ route('dashboard.akun.edit',$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form class="d-inline" method="POST" action="{{ route('dashboard.akun.delete',$item->id) }}">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection

@push('script')
<script>
    window.onload = () => {
        $('#table').DataTable({})
    }
</script>
@endpush
