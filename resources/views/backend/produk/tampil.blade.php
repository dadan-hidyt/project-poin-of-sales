@extends('layouts.backend')

@section('main')
    <div class="col-12">
        @error('gagal_hapus_produk')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        @error('berasil_hapus_produk')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="card card-custom">
            <div class="card-header py-3 border-1 border-bottom">
                <div class="card-title">
                    <h3 class="card-label h3 fw-bolder mt-2">Daftar Produk</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a  href="{{ route('dashboard.product.item.tambah') }}" class='btn btn-success'><i class="fa fa-plus"></i>Tambah</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-head-custom table-head-bg table-bordered table-vertical-center" id="tabel_produk"
                    style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produk</th>
                            <th>Stok</th>
                            <th>Sku</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Harga Modal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
    
        const tabel = $('#tabel_produk').DataTable({
            responsive: true,
            serverSide: true,
            processing: true,
            // Pagination settings
            dom: `<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>
			<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            buttons: [
                'print',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
            ],
            oLanguage: {
                sProcessing: 'Sedang Mengambil Data'
            },

            ajax: {
                url: `{{ route('dashboard.product.item.datatable') }}`,
                method: "POST",
                data: function(d) {
                    d._token = '{{ csrf_token() }}';
                },
                error: function(x, y) {
                    console.log(x, y)
                    Swal.fire({
                        icon: 'error',
                        title: 'Ada Kesalahan saat mengambil data',
                        text: x.statusText
                    })
                },

            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama_produk',
                    name: 'nama_produk'
                },
                {
                    data: 'stok',
                    name: 'stok',
                },
                {
                    data: 'sku',
                    name: 'sku',
                },
                {
                    data: 'kategori',
                    name: 'katagori',
                },
                {
                    data: 'satuan',
                    data: 'satuan'
                },

                {
                    data: 'harga_jual',
                    data: 'harga_jual'
                },
                {
                    data: 'harga_modal',
                    data: 'harga_modal'
                },
                {
                    data: 'action',
                    name: 'action',
                }
            ],
        });
     

      
    </script>
@endpush
