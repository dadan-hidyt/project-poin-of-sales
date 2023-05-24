@extends('layouts.backend')


@section('main')
<div class="container-fluid">
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">Pengaturan Satuan Barang</div>
            <div class="card-toolbar">
                <a href="{{ route('dashboard.pengaturan.web') }}" @class(['btn', request()->segment(3) === 'web' ? 'btn-primary' : 'struk_setting'])>Pengaturan Web</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.pajak') }}" @class(['btn', request()->segment(3) === 'pajak' ? 'btn-primary' : 'struk_setting'])>Pajak Transaksi</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.satuan_barang') }}" @class(['btn', request()->segment(3) === 'satuan_barang' ? 'btn-primary' : 'struk_setting'])>Pengaturan Satuan Barang</a>&nbsp;
                <a href="{{ route('dashboard.pengaturan.struk') }}" @class(['btn', request()->segment(3) === 'struk' ? 'btn-primary' : 'struk_setting'])>Pengaturan Struk</a>&nbsp;
                
            </div>
        </div>
        <div class="card-body">
            @error('delete_gagal')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            @error('delete_sukses')
                <p class="alert alert-success">{{ $message }}</p>
            @enderror
            <a href="{{route('dashboard.pengaturan.satuan_barang.tambah')}}" class="btn btn-primary">Tambah</a>
            <table class="table table-head-custom table-head-bg table-bordered table-vertical-center" id="tabel_produk"
                    style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Satuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($satuan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_satuan }}</td>
                                <td>
                                    <a href="{{ route('dashboard.pengaturan.satuan_barang.delete',$item->id) }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
