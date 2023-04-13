@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3>Pengaturan Website</h3>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('dashboard.pengaturan.web') }}" @class(['btn', request()->segment(3) === 'web' ? 'btn-primary' : 'struk_setting'])>Pengaturan Web</a>&nbsp;
                    <a href="{{ route('dashboard.pengaturan.satuan_barang') }}" @class(['btn', request()->segment(3) === 'satuan_barang' ? 'btn-primary' : 'struk_setting'])>Pengaturan Satuan Barang</a>&nbsp;
                    <a href="{{ route('dashboard.pengaturan.struk') }}" @class(['btn', request()->segment(3) === 'struk' ? 'btn-primary' : 'struk_setting'])>Pengaturan Struk</a>&nbsp;
                </div>
            </div>

            <div class="card-body">
                @livewire('form-pengaturan-web')
            </div>

        </div>
    </div>
@endsection