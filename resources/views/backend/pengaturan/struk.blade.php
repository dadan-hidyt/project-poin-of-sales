@extends('layouts.backend')



@section('main')
<div class="container-fluid">

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible  fade show" role="alert" style="margin-bottom:40px;">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('fail'))
            <div class="alert alert-success alert-dismissible  fade show" role="alert" style="margin-bottom:40px;">
                {{ session('fail') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
    <div class="card card-custom">
        <div class="card-header py-5 border-1 border-bottom">
            <div class="card-title">Pengaturan Struk</div>
            <div class="card-toolbar">
                <a href="{{ route('dashboard.pengaturan.web') }}" @class(['btn', request()->segment(3) === 'web' ? 'btn-primary' : 'struk_setting'])>Pengaturan Web</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.pajak') }}" @class(['btn', request()->segment(3) === 'pajak' ? 'btn-primary' : 'struk_setting'])>Pajak Transaksi</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.satuan_barang') }}" @class(['btn', request()->segment(3) === 'satuan_barang' ? 'btn-primary' : 'struk_setting'])>Pengaturan Satuan Barang</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.struk') }}" @class(['btn', request()->segment(3) === 'struk' ? 'btn-primary' : 'struk_setting'])>Pengaturan Struk</a>&nbsp;
                
            </div>
        </div>
        <div class="card-body mt-5">
           @livewire('pengaturan.form-struk')
        </div>
    </div>
</div>

@endsection
