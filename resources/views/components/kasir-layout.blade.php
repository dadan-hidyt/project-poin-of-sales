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
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
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
                    <img src="{{ asset('kasir-assets') }}/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ asset('kasir-assets') }}/img/logo-small.png" alt="smallLogo"
                        style="width:60% !important;">
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
                        <span class="badge rounded-pill mt-1">{{ $keranjang_pesanan->count() }}</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Keranjang ({{ $keranjang_pesanan->count() }})</span>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                
                                @foreach($keranjang_pesanan as $item)
                                     <li class="notification-message">
                                    <a href="{{route('kasir.pos',$item->kode_pesanan)}}">
                                        <div class="media d-flex">
                                            <div class="media-body flex-grow-1">
                                                <div
                                                    class="transaksi-info d-flex align-items-center justify-content-between">
                                                    <div class="trans-info_head">
                                                        <span class="kode-pesan">Kode Pesan : <b>#{{$item->kode_pesanan}}</b></span>
                                                        <h6 class="pelanggan">{{$item->pelanggan->nama_pelanggan ?? 'Guest'}}</h6>
                                                    </div>
                                                    <span class="pay-total fw-bold">Rp.{{$item->hitungPesanan('grand_total_rupiah')}}</span>
                                                </div>
                                                <p class="noti-time mt-2"><span class="notification-time">4 mins
                                                        ago</span>
                                                </p>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                              
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="transaksi/belum-bayar.html">Lihat Semua Transaksi</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ asset('kasir-assets') }}/img/avatar1.jpg"
                                alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="{{ asset('kasir-assets') }}/img/avatar1.jpg"
                                        alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>{{ auth()->user()->nama_user ?? '' }}</h6>
                                    <h5>{{ auth()->user()->role }}</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item py-2" href="{{ route('kasir.tutup_kasir') }}">
                                <i class="me-2 bx bx-dish fs-5"></i> Tutup Kasir</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0 py-2" href="{{ route('kasir.logout') }}">
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
                            <a href="{{ route('kasir.index') }}" class="d-flex align-items-center fs-5 active">
                                <i class="bx bx-store-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="d-flex align-items-center fs-5">
                                <i class="bx bx-receipt"></i>
                                <span>Riwayat Transaksi</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('kasir.all_transaktion') }}">Semua</a></li>
                                <li><a href="{{ route('kasir.take-away') }}">TakeAway</a></li>
                                <li><a href="{{ route('kasir.belum_bayar') }}">Belum Bayar</a></li>
                                <li><a href="{{ route('kasir.refund_transaktion') }}">Refund</a></li>
                                <li><a href="{{ route('kasir.void_transaktion') }}">Void</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('kasir.laporan_penjualan') }}" class="d-flex align-items-center fs-5">
                                <i class="bx bx-bar-chart"></i>
                                <span>Laporan Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kasir.daftar_pelanggan') }}" class="d-flex align-items-center fs-5">
                                <i class="bx bxs-user-detail"></i>
                                <span>Daftar Pelanggan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kasir.tutup_kasir') }}" class="d-flex align-items-center fs-5">
                                <i class="bx bx-dish"></i>
                                <span>Tutup Kasir</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('kasir.logout') }}" class="d-flex align-items-center fs-5">
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
                    @livewire('form-tambah-pelanggan')
                </div>
            </div>
        </div>
    </div>
    <!-- Tutup Modal Daftar Pelanggan -->

    <!-- Modal Detail Meja -->

  
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
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="{{ asset('kasir-assets') }}/js/jquery.mask.min.js"></script>
    <script>
        // Create an instance of Notyf
        var notyf = new Notyf({
            position: {
                x: 'center',
                y: 'top',
            },
            ripple:true,
            dismissible : true,
        });
        window.addEventListener('added', function(e){
            if(e.detail.status == true){
                notyf.success(e.detail.msg);
                $("#tambahPelanggan").modal('hide')
            } else{
                notyf.error(e.detail.msg);
            }
        })
    </script>
    {{ $footer_script ?? '' }}

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: "Silahkan Pilih",
                allowClear: true
            });
        });



        window.addEventListener('nominal_kosong',function(){
            notyf.error("Nominal Tidak Boleh Kosong kakak")
        })
    </script>
</body>

</html>
