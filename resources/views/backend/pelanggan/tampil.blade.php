@extends('layouts.backend')
@section('main')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header py-3 border-1 border-bottom">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-user text-primary"></i>
                    </span>
                    <h3 class="card-label">Daftar Pelanggan</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button id="button_tambah_pelanggan" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                @error('warning')
                    <p class="alert alert-warning">{{ $message }}</p>
                @enderror
                @error('error')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                @error('success')
                    <p class="alert alert-success">{{ $message }}</p>
                @enderror
                <table id="tabel_pelanggan"
                    class="table table-head-custom table-head-bg table-vertical-center table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telp</th>
                            <th>Alamat</th>
                            <th>Poin</th>
                            <th>KOTA</th>
                            <th>JK</th>
                            <th>Tl</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    @include('backend.pelanggan.partials.modal_tambah_data')
@endsection
@push('script')
    <script>
        const modal_tambah_pelanggan = $('#modal_tambah_pelanggan');

        const button_tambah_pelanggan = $('#button_tambah_pelanggan');
        /**======AKSI KETIKA TOMBOL TAMBAH DI KLIK===========**/
        button_tambah_pelanggan.on('click', async () => modal_tambah_pelanggan.modal('show'));

        let tabel = $('#tabel_pelanggan').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,

            ajax: {
                url: "{{ route('dashboard.pelanggan.datatable') }}",
                method: "POST",
                data: (d) => {
                    d._token = "{{ csrf_token() }}"
                },
                error: async (x, y) => {
                    Swal.fire({
                        icon: 'error',
                        title: "Kesalahan saat memuat data!",

                    })
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'kode_pelanggan',
                    name: 'Kode Pelanggan'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },

                {
                    data: 'email',
                    name: 'Email'
                },
                {
                    data: 'no_hp',
                    name: 'No Hp'
                },
                {
                    data: 'alamat',
                    name: 'Alamat',
                },
                {
                    data: 'poin',
                    name: 'POINT'
                },
                {
                    data: 'kota',
                    name: 'KOTA',
                },
                {
                    data: 'jenis_kelamin',
                    name: 'Jenis Kelamin'
                },
                {
                    data: 'tanggal_lahir',
                    name: 'Tanggal Lahir'
                },
                {
                    data: 'action',
                    name: 'Action'
                }
            ]

        });

        /**===AKSI KETIKA DATA BERHASIL DI TAMAHKAN===**/

        window.addEventListener('added', function(e) {
            if (e.detail.status == true) {
                tabel.ajax.reload();
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: e.detail.msg,
                });
                modal_tambah_pelanggan.modal('hide');
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'gagal',
                    text: e.detail.msg,
                });
            }
        })
    </script>
@endpush
