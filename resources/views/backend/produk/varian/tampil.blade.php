@extends('layouts.backend')

@section('main')
<div class="card card-custom">
    <div class="card-header py-3 border-1 border-bottom">
        <h3 class="card-title h3 fw-bolder mt-4">Daftar Varian</h3>
        <div class="card-toolbar">
            <!--begin::Button-->
            <a  href="{{ route('dashboard.produk.varian.tambah') }}" class='btn btn-success'><i class="fa fa-plus"></i>Tambah</a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        @error('feedback')
          <p class="alert alert-{{ $errors->get('feedback')['type'] }}">{{ $errors->get('feedback')['message']  }}</p>
        @enderror
        <table class="table table-head-custom table-head-bg table-bordered table-vertical-center" id="tabel_varian">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PRODUK</th>
                    <th>Nama Varian</th>
                    <th>Harga</th>
                    <th>STOK</th>
                    <th>Terjual</th>
                    <th>ACTIOn</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        
    </div>
</div>
@endsection

@push('script')
    <script>
     $(document).ready(function(){
            $("#tabel_varian").DataTable({
                responsive: true,
            processing: true,
            serverSide: true,
                ajax : {
                    url : `{{ route('dashboard.produk.varian.datatable') }}`,
                    error: function(error){
                        Swal.fire({
                            icon: 'error',
                            text : `${error.statusText}`,
                            title: "Kesalahan saat memuat data!",
                    })
                    }
                },
                columns : [
                    {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'produk',
                    name: 'produk'
                },
                {
                    data: 'nama_varian',
                    name: 'nama_varian'
                },
                {
                    data: 'harga',
                    name: 'harga'
                },
                {
                    data: 'stok',
                    name: 'stok'
                },
                {
                    data: 'terjual',
                    name: 'terjual'
                },
                {
                    data: 'action',
                    name: 'action'
                }
                ]
            });
        })    </script>
@endpush