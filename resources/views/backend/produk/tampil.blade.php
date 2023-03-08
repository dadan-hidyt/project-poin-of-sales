@extends('layouts.backend')

@section('main')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-supermarket text-primary"></i>
                    </span>
                    <h3 class="card-label">Daftar Produk</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button id='btn-tambah-produk' class='btn btn-primary'><i class="fa fa-plus"></i>Tambah</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable" id="tabel_produk"
                    style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produk</th>
                            <th>Stok</th>
                            <th>Sku</th>
                            <th>Kategori</th>
                            <th>Harga Modal</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
    @include('backend.produk.partials.modal_tambah')
@endsection
@push('script')
    <script>
        /**================MODAL TAMBAH PRODUk======================*/
        const modal = $('#modal-tambah-produk');
        $('#btn-tambah-produk').on('click', function() {
            modal.modal('show');
        });

        /**================
         * DATATABLES UNTUK PRODUK
         * Serverside Rendering
         * ======================*/
        const tabel = $('#tabel_produk');
        tabel.DataTable({
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
                    data: 'harga_modal',
                    data: 'harga_modal'
                },

                {
                    data: 'harga_jual',
                    data: 'harga_jual'
                },
                {
                    data: 'harga_beli',
                    data: 'harga_beli'
                },
                {
                    data: 'action',
                    name: 'action',
                }
            ],
        })
    </script>
@endpush
