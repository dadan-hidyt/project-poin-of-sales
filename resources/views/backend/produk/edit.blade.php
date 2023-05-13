@extends('layouts.backend')
@section('main')
    <div class="row">
        <div class="container-fluid">
            <div class="card card-custom">
                <div class="card-header py-2 border-1 border-bottom">
                    <div class="card-title">
                        <i class="fa fa-edit"></i> &nbsp;Edit Produk
                    </div>
                    <div class="card-toolbar">
                        <a class="btn btn-link btn-success" href="{{route('dashboard.product.item')}}"> <i class="flaticon2-supermarket tex-white"></i> List Produk </a>
                    </div>
                </div>
                <div class="card-body">
                    @livewire('form-edit-produk', ['item' => $item])
                </div>
            </div>
        </div>
    </div>
    @include('backend.produk.partials.modal_tambah_kategori_inline')
@endsection

@push('script')
    <script>
        const modalTambahKatagori = $('#modal_tambah_kategori_inline')
        /**================ MENAMBAH KATEGORI BARU.===================*/
        $('#btn-add-new-kategori').on('click', function() {
            modalTambahKatagori.modal('show');
        });
        /***==
         * JIKA KATEGORI DI TAMBAHKAN MAKA TAMPILKAN ULANG MODAL TAMBAH PRODUK
         * DAN TUTUP MODAL TAMBAH KATAEGORI
         * **/
        window.addEventListener('kategoriDitambahkan', function(e) {
            if (e.detail == true) {
                modalTambahKatagori.modal('hide');
                Swal.fire({
                    icon: 'success',
                    text: 'Modal berhasil di tambahkan!',
                })
            } else {
                modalTambahKatagori.modal('show');
            }
        })
    </script>
@endpush
