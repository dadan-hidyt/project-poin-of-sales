@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Tambah Satuan Barang</div>
            </div>
            <div class="card-body">
                @error('tambah_sukses')
                    <p class="alert alert-success">{{ $message }}</p>
                @enderror
                @error('tambah_gagal')
                <p class="alert alert-error">{{ $message }}</p> 
                @enderror
            
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_satuan">Nama Satuan</label>
                        <input type="text" name="nama_satuan" @class(['form-control', $errors->has('satuan_barang') ? 'is-invalid' : ''])>
                        @error('nama_satuan')
                            {{ $message }}
                        @enderror
                    </div>
                    <button class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
