<x-kasir-layout>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <h3 class="fw-bolder">Laporan Penjualan</h3>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <a href="#" class="btn btn-info d-flex align-items-center justify-content-center text-white">
                            <i class="bx bx-cloud-download fs-4 mx-2"></i>
                            <span>Download Laporan</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><img src="../assets/img/icons/dash1.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>Rp.<span class="counters" id="{{ $kas }}">{{ formatRupiah($kas) }}</span></h5>
                        <h6>Dana Kas</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="../assets/img/icons/dash2.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" id="{{ $total_transaksi }}">{{ formatRupiah($total_transaksi) }}</span></h5>
                        <h6>Total Transaksi</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="../assets/img/icons/dash3.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>Rp.<span class="counters" id="{{ $penghasilan }}">{{ formatRupiah($penghasilan) }}</span></h5>
                        <h6>Uang Masuk</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="../assets/img/icons/dash4.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>Rp.<span class="counters" id="40000.00">400.00</span></h5>
                        <h6>Uang Keluar</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Pelanggan</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Pesanan Belum Bayar</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file-text"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 d-flex">
                <div class="dash-count das3">
                    <div class="dash-counts">
                        <h4>105</h4>
                        <h5>Penjualan Harian</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-kasir-layout>