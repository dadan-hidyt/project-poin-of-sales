<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="barayaDigital - Point Of Sale">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="barayaDigital - Point Of Sale">
    <meta name="robots" content="noindex, nofollow">
    <title>Title - Page</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('kasir-assets') }}/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/plugins/fontawesome/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/costume.css">

    @livewireStyles
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="assets/img/logo-small.png" alt="smallLogo" style="width:60% !important;">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="bx bx-cart-alt fs-4"></i>
                        <span class="badge rounded-pill mt-1">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Keranjang</span>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="pembayaran.html">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#232432</b></span>
                                                        <h6 class="pelanggan">Jhon Bae</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.145.000,00</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="transaksi/belum-bayar.html">Lihat Semua Transaksi</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="assets/img/avatar1.jpg" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="assets/img/avatar1.jpg" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item py-2" href="profile.html">
                                <i class="me-2 bx bx-dish fs-5"></i> Tutup Kasir</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0 py-2" href="signin.html">
                                <i class="bx bx-log-out fs-5 me-2"></i>
                                Logout</a>
                            <hr class="m-0">

                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html" class="d-flex align-items-center fs-5 active">
                                <i class="bx bx-store-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="d-flex align-items-center fs-5">
                                <i class="bx bx-receipt"></i>
                                <span>Riwayat Transaksi</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transaksi/semua.html">Semua</a></li>
                                <li><a href="transaksi/refund.html">Refund</a></li>
                                <li><a href="transaksi/void.html">Void</a></li>
                                <li><a href="transaksi/belum-bayar.html">Belum Bayar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="penjualan/laporan-penjualan.html" class="d-flex align-items-center fs-5">
                                <i class="bx bx-bar-chart"></i>
                                <span>Laporan Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <a href="pelanggan/index.html" class="d-flex align-items-center fs-5">
                                <i class="bx bxs-user-detail"></i>
                                <span>Daftar Pelanggan</span>
                            </a>
                        </li>
                        <li>
                            <a href="transaksi/tutup-kasir.html" class="d-flex align-items-center fs-5">
                                <i class="bx bx-dish"></i>
                                <span>Tutup Kasir</span>
                            </a>
                        </li>

                        <li>
                            <a href="auth/login.html" class="d-flex align-items-center fs-5">
                                <i class="bx bx-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">

           {{ $slot }}


        </div>
    </div>



    <!-- Modal Tambah Pesanan -->

    @include('kasir.include.modal-tambah-pesanan')

    <!-- Tutup Modal Tambah Pesanan -->

    <!-- Modal Daftar Pelanggan -->

    <div class="modal fade" id="tambahPelanggan" tabindex="-1" aria-labelledby="tambahPelangganLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-tambahPelanggan border-0">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPelangganLabel">Tambah Pelanggan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bx bx-x"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="namaPelanggan"
                                placeholder="Nama Pelanggan">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="Email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="no.phone" placeholder="No.Phone">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Tambah Pelanggan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutup Modal Daftar Pelanggan -->

    <!-- Modal Detail Meja -->

    <div class="modal fade" id="detailMeja" tabindex="-1" aria-labelledby="detailMejaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-detailMeja">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailMejaLabel">Tambah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bx bx-x"></i></button>
                </div>
                <div class="modal-body py-4">
                    <div class="container">
                        <div class="detail-meja d-flex  justify-content-between fs-6">
                            <ul>
                                <li class="my-2">Kode Pesan : <span>#324234</span> </li>
                                <li class="my-2">Pelanggan : <span>Jhone Bae</span> </li>
                                <li class="my-2">Jumlah Tamu : <span>10</span> Orang</li>
                            </ul>
                            <ul>
                                <li class="my-2">Status Bayar : <span> Belum Ada </span> </li>
                                <li class="my-2">Status Meja: <span> Belum Ada </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top py-4">
                    <div class="container">
                        <a href="transaksi/form-pembayaran.html" class="btn btn-primary p-1 px-2">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <!-- Tutup Modal Tambah Pesanan -->
    <script src="{{ asset('kasir-assets') }}/js/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/js/feather.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/js/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('kasir-assets') }}/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/plugins/select2/js/select2.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/js/moment.min.js"></script>
    <script src="{{ asset('kasir-assets') }}/js/bootstrap-datetimepicker.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="{{ asset('kasir-assets') }}/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="{{ asset('kasir-assets') }}/js/script.js"></script>
    {{ $footer_script ?? '' }}
</body>

</html>
