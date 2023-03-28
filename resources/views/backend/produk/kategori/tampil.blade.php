@extends('layouts.backend')

@section('main')
    <div class="row">
        <div class="container-fluid">
            <h3>Kategori Produk</h3>
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
                        <button id='btn-tambah-kategori' class='btn btn-primary'><i class="fa fa-plus"></i>Tambah</button>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    @error('gagal_hapus_kategori')
                        <p class="alert alert-danger">{!! $message !!}</p>
                    @enderror
                    @error('berhasil_hapus_kategori')
                        <p class="alert alert-success">{!! $message !!}</p>
                    @enderror
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="tabel_kategori"
                        style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Kategori</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
    @include('backend.produk.partials.modal_tambah_kategori_inline')
@endsection

@push('script')
    <script>
        const modal = $('#modal_tambah_kategori_inline');
        /**=======UNTUK DATATABLE KATEGORI PRODUK*/
        let tabel = $('#tabel_kategori').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            onLanguage: {
                sProcessing: true,
            },
            ajax: {
                url: "{{ route('dashboard.product.kategori.datatable') }}",
                method: "POST",
                data: (d) => {
                    d._token = "{{ csrf_token() }}";
                },
                // error: function(x,y) {
                //     Swal.fire({
                //         icon : 'error',
                //         title : x.statusText,
                //         text : "Ada kesalahan saat meminta data",
                //     })
                // }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                }, {
                    data: 'nama_kategori',
                    name: 'nama_kategori',
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]

        });


        $('#btn-tambah-kategori').on('click', function() {
            modal.modal('show')
        });

        window.onload = function() {
            window.addEventListener('kategoriDitambahkan', function(e) {
                if (e.detail == true) {
                    tabel.ajax.reload();
                    modal.modal('hide');
                } else {
                    modal.modal('show');
                }
            })
        }
    </script>
@endpush
