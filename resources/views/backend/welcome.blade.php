@extends('layouts.backend')
@section('main')
    <div class="row">
        <div class="alert-section col-12">
            <p class="alert alert-warning">Silahkan update akun anda</p>
        </div>

        <main class="col-12">
            <!-- sekilas toko -->
            <div class="card card-custom">
                <div class="card-header bg-primary">
                    <div class="card-title text-white">Penjualan</div>
                    <div id="filter" class="card-toolbar">
                        <form action="">
                            <select class="form-control" name="" id="">
                                <option value="">Hari</option>
                                <option value="">Bulan</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="h5">Total Semua Penghasilan:
                                <div class="h2 mt-5">Rp. {{ formatRupiah($total_pendapatan_semua_transaksi) }}</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="h5">Total Transaksi:
                                <div class="h2 mt-5">{{ $total_semua_transaksi }}</div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- sek -->
        </main>
    </div>
@endsection
