@extends('layouts.backend')
@section('main')
    <div class="row">
        <div class="alert-section col-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Selamat Datang!</strong> Silahkan Update akun anda.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        </div>


        <main class="col-12">
            <div class="card statistik-info">
                <div class="card-body">
                    <div class="title pb-4 mb-5 border-1 border-bottom">
                        <h3>Statistik Penjualan</h3>
                    </div>
                    <div class="row py-5 justify-content-between">
                        <div class="col-md-3">
                           <div class="card">
                            <div class="card-body">
                                 <div class="h6">Total Transaksi:
                                <div class="h3 mt-5">{{ $total_semua_transaksi }}</div>
                            </div>
                            </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="card">
                            <div class="card-body">
                                 <div class="h6">Hari Ini:
                                <div class="h3 mt-5">{{ $total_transaksi_hari_ini }}</div>
                            </div>
                            </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                             <div class="card-body">
                                  <div class="h6">Total Semua Penghasilan:
                                 <div class="h3 mt-5">Rp. {{ formatRupiah($total_pendapatan_semua_transaksi) }}</div>
                             </div>
                             </div>
                            </div>
                         </div>
                        <div class="col-md-3">
                           <div class="card">
                            <div class="card-body">
                                 <div class="h6">Penghasilan Hari ini:
                                <div class="h3 mt-5">Rp. {{ formatRupiah($total_pendapatan_semua_transaksi) }}</div>
                            </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card statistik-chart mt-5">
                @livewire('chart-statistik-penjualan')
            </div>
        </main>
    

     
    </div>
@endsection
