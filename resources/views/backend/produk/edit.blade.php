@extends('layouts.backend')
@section('main')
    <div class="container-fluid">
        <h1>Edit Produk: {{ $item->id }}</h1>
        <div class="bg-white rounded p-4">
            @livewire('form-edit-produk', ['item' => $item])
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
                    icon : 'success',
                    text : 'Modal berhasil di tambahkan!',
                })
            } else {
                modalTambahKatagori.modal('show');
            }
        })
    </script>
@endpush
