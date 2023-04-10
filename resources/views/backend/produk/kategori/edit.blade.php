@extends('layouts.backend')

@section('main')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">
                    <span class="card-icon">
                        <i class="flaticon2-supermarket text-primary"></i>
                    </span>
                    <h3 class="card-label text-white">Edit Kategori Produk</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('dashboard.product.kategori')}}" class="btn btn-warning">Daftar Kategori</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                @error('peringatan')
                    <p class="alert alert-warning">{{ $message }}</p>
                @enderror
                @error('suksess')
                    <p class="alert alert-success">{{ $message }}</p>
                @enderror
                @error('gagal')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Nama Kategori</label>
                        <input name="nama_kategori" type="text" value="{{ $item['nama_kategori'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
