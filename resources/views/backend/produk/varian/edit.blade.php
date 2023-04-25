@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header bg-primary">
        <div class="card-title text-white">Tambah Varian Produk</div>
        <div class="card-toolbar">
            <a href="{{ route('dashboard.produk.varian') }}" class="btn  btn-warning">Back</a>
        </div>
    </div>
    <div class="card-body">
      @livewire('form-varian', ['edit'=>true,'varianModel' => $varian])
    </div>
</div>
@endsection
