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
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <button class="button_delete">DELETE</button>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
    @include('backend.produk.partials.modal_tambah')
    @include('backend.produk.partials.modal_tambah_kategori_inline')
@endsection
@push('script')
    <script>
        /**================MODAL TAMBAH PRODUk======================*/
        const modalTambahData = $('#modal-tambah-produk');
        const modalTambahKatagori = $('#modal_tambah_kategori_inline');
        $('#btn-tambah-produk').on('click', function() {
            modalTambahData.modal('show');
        });

        /**================
         * DATATABLES UNTUK PRODUK
         * -Data Dari tabel di render di sisi server
         * -Sumber Data: `{{ route('dashboard.product.item.datatable') }}`
         * ======================*/
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
                    data: 'harga_beli',
                    data: 'harga_beli'
                },
                {
                    data: 'action',
                    name: 'action',
                }
            ],
        });
        /**===============================================
         * RESPON YANG TERJADI KETIKA PRODUK DI TAMBAHKAN
         * -Respon didapatkan dari server
         * ==============================================
         * **/
        window.addEventListener('productAdded', function(res) {
            if (res.detail.success == true) {
                tabel.ajax.reload();
                modalTambahData.modal('hide');
                Swal.fire({
                    title: 'Berhasil',
                    icon: 'success',
                    text: "Produk Berhasil Ditambahkan😁"
                })
            } else {
                Swal.fire({
                    title: 'Gagal',
                    icon: 'error',
                    text: "Produk Gagal Ditambahkan😣"
                })
            }

        })

        /**=================UNTUK TOMBOL HAPUS DAN UPDATE================**/
        tabel.on('draw', function(params) {
            //delete
        })
        /**================ MENAMBAH KATEGORI BARU.===================*/
        $('#btn-add-new-kategori').on('click', function() {
            modalTambahData.modal('hide');
            modalTambahKatagori.modal('show');
        });
        /***==
         * JIKA KATEGORI DI TAMBAHKAN MAKA TAMPILKAN ULANG MODAL TAMBAH PRODUK
         * DAN TUTUP MODAL TAMBAH KATAEGORI
         * **/
        window.addEventListener('kategoriDitambahkan', function(e) {
            if (e.detail == true) {
                modalTambahData.modal('show');
                modalTambahKatagori.modal('hide');
            } else {
                modalTambahData.modal('hide');
                modalTambahKatagori.modal('show');
            }
        })
    </script>
@endpush
