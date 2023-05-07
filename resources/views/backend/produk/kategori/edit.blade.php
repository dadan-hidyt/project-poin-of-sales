@extends('layouts.backend')

@section('main')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header py-4 border-1 border-bottom">
                <div class="card-title">
                    <h3 class="card-label fw-bolder h3 mt-2">Edit Kategori Produk</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('dashboard.product.kategori')}}" class="btn btn-warning">Kembali</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                @error('peringatan')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('suksess')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('gagal')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Nama Kategori</label>
                        <input name="nama_kategori" type="text" value="{{ $item['nama_kategori'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="update">Perbaharui Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
