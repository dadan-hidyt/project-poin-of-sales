@extends('layouts.backend')


@section('main')
<div class="container-fluid">
    <div class="card card-custom">
        <div class="card-header bg-primary">
            <div class="card-title text-white">Pengaturan Satuan Barang</div>
        </div>
        <div class="card-body">
           @livewire('pengaturan.form-struk')
        </div>
    </div>
</div>
@endsection
