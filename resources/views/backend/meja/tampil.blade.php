@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Daftar Meja</div>
                <div class="card-toolbar">
                    <a class="btn btn-warning" href="{{ route('dashboard.meja.create') }}"><i class="fa fa-plus-circle"></i>Tambah</a>
                </div>
            </div>
           <div class="card-body">
            <table id="tabel_meja" class="table table-head-custom table-head-bg table-vertical-center table-bordered">
                <thead>
                   <tr>
                    <th>#</th>
                    <th>Nomor Meja</th>
                    <th>Nama Meja</th>
                    <th>Kapasitas</th>
                    <th>Tersedia</th>
                    <th><i class="fa fa-cloud"></i></th>
                   </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
           </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function(){
            $("#tabel_meja").DataTable({
                responsive: true,
            processing: true,
            serverSide: true,
                ajax : {
                    url : `{{ route('dashboard.meja.datatable') }}`,
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
                    data: 'nomor_meja',
                    name: 'nomor_meja'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'kapasitas',
                    name: 'kapasitas'
                },
                {
                    data: 'tersedia',
                    name: 'tersedia'
                },
                {
                    data: 'action',
                    name: 'action'
                }
                ]
            });
        })
    </script>
@endpush