@extends('layouts.backend')
@section('main')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-user text-primary"></i>
                    </span>
                    <h3 class="card-label">Daftar Pelanggan</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button id="button_tambah_pelanggan" class="btn btn-primary">tambah</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <table id="tabel_pelanggan" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Pelanggan</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>POINT</th>
                            <th>KOTA</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
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
                data:  (d) => {
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
                    data: 'nama',
                    name: 'Kode Pelanggan'
                },
                {
                    data: 'kode_pelanggan',
                    name: 'Kode Pelanggan'
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
                    data: 'jenis_kelamin',
                    name: 'Jenis Kelamin'
                },
                {
                    data : 'action',
                    name : 'Action'
                }
            ]

        });
    </script>
@endpush
