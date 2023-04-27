@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header bg-primary">
        <div class="card-title text-white">Edit</div>
        <div class="card-toolbar">
            <a class="btn btn-warning" href="{{ route('dashboard.akun.index') }}">Back</a>
        </div>
    </div>
    <div class="card-body">
        @livewire('form-akun', ['edit'=>true,'akun_model' => $akun])
    </div>
</div>
@endsection
