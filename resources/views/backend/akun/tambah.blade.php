@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header py-3 border-1 border-bottom">
        <div class="card-title">List User</div>
        <div class="card-toolbar">
            <a class="btn btn-warning" href="{{ route('dashboardakun.index') }}">Kembali</a>
        </div>
    </div>
    <div class="card-body">
        @livewire('form-akun', ['edit'=>false])
    </div>
</div>
@endsection
