@extends('layouts.backend')
@section('main')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-user text-primary"></i>
                    </span>
                    <h3 class="card-label">Daftar Pelanggank</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('dashboard.product.kategori')}}" class="btn btn-primary">Tambah Pelanggan</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
              <h1>Tabel pelanggan</h1>
            </div>
        </div>
    </div>
@endsection
