@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header py-3 border-1 border-bottom">
        <div class="card-title h3 fw-bolder ">Tambah Varian Produk</div>
        <div class="card-toolbar">
            <a href="{{ route('dashboard.produk.varian') }}" class="btn  btn-warning">Back</a>
        </div>
    </div>
    <div class="card-body">
      @livewire('form-varian')
    </div>
</div>
@endsection
