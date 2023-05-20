<x-kasir-layout>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="card-header d-flex align-items-center justify-content-between border-1 border-bottom pb-4 pt-2">
                            <h3 class="fw-bolder">Laporan Penjualan</h3>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-primary d-flex align-items-center text-white pe-3 me-3">
                                    <i class="bx bx-cloud-download me-2"></i>
                                    <span>Download</span>
                                </button>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal-tambah-pengeluaran">
                                    Tambah Pengeluaran
                                </button>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="dash-widget">
                                    <div class="dash-widgetimg">
                                        <span><img src="../assets/img/icons/dash1.svg" alt="img"></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5 id="dana-kas">Rp.<span class="counters"
                                                id="{{ $kas }}">{{ formatRupiah($kas) }}</span></h5>
                                        <h6>Dana Kas</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget dash-3">
                                    <div class="dash-widgetimg">
                                        <span><img src="../assets/img/icons/dash4.svg" alt="img"></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5 id="sisa_kas">Rp.<span
                                                class="counters">{{ formatRupiah($sisa_kas) }}</span>
                                        </h5>
                                        <h6>Sisa Kas</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget dash1">
                                    <div class="dash-widgetimg">
                                        <span><img src="../assets/img/icons/dash2.svg" alt="img"></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5><span class="counters"
                                                id="{{ $total_transaksi }}">{{ formatRupiah($total_transaksi) }}</span>
                                        </h5>
                                        <h6>Total Transaksi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget dash2">
                                    <div class="dash-widgetimg">
                                        <span><img src="../assets/img/icons/dash3.svg" alt="img"></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5>Rp.<span class="counters"
                                                id="{{ $penghasilan }}">{{ formatRupiah($penghasilan) }}</span></h5>
                                        <h6>Uang Masuk</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget dash3">
                                    <div class="dash-widgetimg">
                                        <span><img src="../assets/img/icons/dash4.svg" alt="img"></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5 id="uang_keluar">Rp.<span class="counters">
                                                <div class=""></div>
                                            </span></h5>
                                        <h6>Uang Keluar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget dash1">
                                    <div class="dash-widgetimg">
                                        <span><img src="../assets/img/icons/dash2.svg" alt="img"></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5>Rp.<span class="counters">{{ formatRupiah($penghasilan_bersih) }}</span>
                                        </h5>
                                        <h6>Pembayaran Cash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget dash2">
                                    <div class="dash-widgetimg">
                                        <span><i class="bx bxs-credit-card fs-4 text-info"></i></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5>Rp.<span class="counters">{{ formatRupiah($penghasilan_bersih) }}</span>
                                        </h5>
                                        <h6>Pembayaran Debit</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dash-widget">
                                    <div class="dash-widgetimg">
                                        <span><i class="bx bxs-wallet-alt fs-4 text-warning"></i></span>
                                    </div>
                                    <div class="dash-widgetcontent">
                                        <h5>Rp.<span class="counters">{{ formatRupiah($penghasilan_bersih) }}</span>
                                        </h5>
                                        <h6>Pembayaran E-Wallet</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-lg-12">
                <div class="card py-2">
                    <div class="card-body">
                        <table class="table  datanew py-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pengeluaran</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($history_penjualan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_pengeluaran }}</td>
                                        <td>Rp. {{ formatRupiah($item->jumlah_pengeluaran) }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore class="modal fade" id="modal-tambah-pengeluaran" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengeluaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bx bx-x text-danger text-hover-white"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('kasir.form-tambah-pengeluran-kasir');
                    </div>
                </div>
            </div>
        </div>


    </div>

    <x-slot name='footer_script'>
        <script>
            window.addEventListener('berhasil_ditambahkan', () => {
                notyf.success('Data Pengeluaran Berhasil DI tambahkan!');
                $('#modal-tambah-pengeluaran').modal('hide');
                fetchUangKeluar();
                fetchDanaKas()
            });
            window.addEventListener('pengeluaran_lebih_besar_dari_kas_awal', (e) => {
                notyf.error('Jumlah Pengeluran Melebihi Kas Awal! Sisa kas anda ' + e.detail.sisa_kas ?? 0);

            });

            function fetchUangKeluar() {
                $.get('{{ route('kasir.laporan.pengeluaran') }}', (e) => {
                    $('#uang_keluar').html(e)
                })
            }

            function fetchDanaKas() {
                $.get('{{ route('kasir.laporan.dana_kas') }}', (e) => {
                    $('#sisa_kas').html(e)
                })
            }

            fetchUangKeluar()
        </script>
    </x-slot>
</x-kasir-layout>
