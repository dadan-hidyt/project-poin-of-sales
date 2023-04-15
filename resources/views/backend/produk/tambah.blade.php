@extends('layouts.backend')
@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title">Tambah Produk</div>
                <div class="card-toolbar">a</div>
            </div>
            <div class="card-body">
                @livewire('form-tambah-produk')
            </div>
        </div>
    </div>
    @include('backend.produk.partials.modal_tambah_kategori_inline')
@endsection
@push('script')
    <script>
        const modalTambahKatagori = $('#modal_tambah_kategori_inline');
        window.addEventListener('productAdded', function(res) {
            console.log(res)
            if (res.detail.success == true) {
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
        $('#btn-add-new-kategori').on('click', function() {
            modalTambahKatagori.modal('show');
        });
        /***==
         * JIKA KATEGORI DI TAMBAHKAN MAKA TAMPILKAN ULANG MODAL TAMBAH PRODUK
         * DAN TUTUP MODAL TAMBAH KATAEGORI
         * **/
        window.addEventListener('kategoriDitambahkan', function(e) {
            if (e.detail == true) {
                Swal.fire({
                    title: 'Berhasil',
                    icon: 'success',
                    text: "Kategori Baru berhasil di tambahkan!"
                })
                modalTambahKatagori.modal('hide');
            } else {
                Swal.fire({
                    title: 'Gagal',
                    icon: 'error',
                    text: "Kategori Gagal Ditambahkan😣"
                })
                modalTambahKatagori.modal('show');
            }
        })
    </script>
@endpush
