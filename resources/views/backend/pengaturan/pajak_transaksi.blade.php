@extends('layouts.backend')


@section('main')
<div class="container-fluid">
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">Pengaturan Pajak Pertransaksi</div>
            <div class="card-toolbar">
                <a href="{{ route('dashboard.pengaturan.web') }}" @class(['btn', request()->segment(3) === 'web' ? 'btn-primary' : 'struk_setting'])>Pengaturan Web</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.pajak') }}" @class(['btn', request()->segment(3) === 'pajak' ? 'btn-primary' : 'struk_setting'])>Pajak Transaksi</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.satuan_barang') }}" @class(['btn', request()->segment(3) === 'satuan_barang' ? 'btn-primary' : 'struk_setting'])>Pengaturan Satuan Barang</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.struk') }}" @class(['btn', request()->segment(3) === 'struk' ? 'btn-primary' : 'struk_setting'])>Pengaturan Struk</a>&nbsp;
                
            </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pajak Pertransaksi %</label>
                            <input type="email" class="form-control mt-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pajak Pertransaksi %</label>
                            <input 
                                type="email" 
                                class="form-control mt-3" 
                                id="exampleInputEmail1" 
                                aria-describedby="emailHelp" 
                                placeholder="10%"
                                disabled
                            >
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
