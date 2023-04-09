@extends('layouts.backend')

@section('main')
    <div class="col-12">
        @error('sukses')
            <p class="alert alert-success">
                {{ $message }}
            </p>
        @enderror
        @error('gagal')
            <p class="alert alert-danger">
                {{ $message }}
            </p>
        @enderror
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="icon-2x flaticon-price-tag text-primary"></i>
                    </span>
                    <h3 class="card-label">Manage Kupon</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button id='btn-tambah-kupon' class='btn btn-primary'><i class="fa fa-plus"></i>Tambah</button>
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
                            <th>Nama Kupon</th>
                            <th>KODE KUPON</th>
                            <th>Produk</th>
                            <th>Masa Berlaku</th>
                            <th>jmlh Kupon</th>
                            <th>Jmlh Terpakai</th>
                            <th>Jmlh Potogan</th>
                            <th>Sisa Kupon</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
    @include('backend.kupon.partials.modal_tambah_kupon')
@endsection
@push('script')
    <script>
        /**================MODAL TAMBAH PRODUk======================*/
        const modalTambbahKupon = $('#modal_tambah_kupon');
        $('#btn-tambah-kupon').on('click', function() {
            modalTambbahKupon.modal('show');
        });

        /**================
         * DATATABLES UNTUK KUPOn
         * -Data Dari tabel di render di sisi server
         * -Sumber Data: `{{ route('dashboard.promo.kupon.datatable') }}`
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
                'csvHtml5',
                'pdfHtml5',
            ],
            oLanguage: {
                sProcessing: 'Sedang Mengambil Data'
            },

            ajax: {
                url: `{{ route('dashboard.promo.kupon.datatable') }}`,
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
                    data: 'nama_kupon',
                    name: 'nama_kupon'
                },
                {
                    data: 'kode_kupon',
                    name: 'kode_kupon',
                },
                {
                    data: 'produk',
                    name: 'produk',
                },
                {
                    data: 'masa_berlaku',
                    name: 'masa_berlaku',
                },
                {
                    data: 'jumlah_kupon',
                    data: 'jumlah_kupon'
                },

                {
                    data: 'jumlah_terpakai',
                    data: 'jumlah_terpakai'
                }, {
                    name: 'jumlah_potongan',
                    data: 'jumlah_potongan',
                }, {
                    name: 'jumlah_sisa',
                    data: 'jumlah_sisa',
                },
                {
                    data: 'deskripsi_kupon',
                    data: 'deskripsi_kupon'
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
        window.addEventListener('kupon_added', function(res) {
            if (res.detail.success == true) {
                tabel.ajax.reload();
                modalTambbahKupon.modal('hide');
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
       
    </script>
@endpush
