@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Tambah Meja</div>
                <div class="card-toolbar">
                    <a class="btn btn-warning" href=""><i class="fa fa-plus-circle"></i>Daftar Meja</a>
                </div>
            </div>
           <div class="card-body">
            @livewire('form-meja', ['type' => 'edit','meja_model'=> $meja])
           </div>
        </div>
    </div>
@endsection
