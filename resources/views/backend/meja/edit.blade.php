@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header py-3 border-1 border-bottom">
                <div class="card-title">Edit Meja</div>
                <div class="card-toolbar">
                    <a class="btn btn-warning" href="{{ route('dashboard.meja.index') }}"><i class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </div>
           <div class="card-body">
            @livewire('form-meja', ['type' => 'edit','meja_model'=> $meja])
           </div>
        </div>
    </div>
@endsection
