@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header bg-primary">
        <div class="card-title text-white">List User</div>
    </div>
    <div class="card-body">
        <table class="table table-head-custom table-head-bg table-vertical-center table-bordered" id="table">
          <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($akun as $item)
            <tr>
                <td>{{$item->nama_user}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->role}}</td>
                <td>{{$item->karyawan}}</td>
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
