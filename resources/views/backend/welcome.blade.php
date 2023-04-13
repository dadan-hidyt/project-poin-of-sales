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
                            <div class="h5">Total Penjualan:
                                <div class="h2 mt-5">Rp. 29.000.00</div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- sek -->
        </main>
    </div>
@endsection
