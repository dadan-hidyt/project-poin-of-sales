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
        @livewire('form-akun', ['edit'=>false])
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
