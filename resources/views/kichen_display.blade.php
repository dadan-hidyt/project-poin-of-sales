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

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/costume.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/kitchen.css">
</head>

<body>

    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}


    <div class="main-wrapper mt-5">
        <header class="header-kitchen position-fixed-top">
            <div class="container-xxl w-100 h-100 d-flex align-items-center justify-content-between border-bottom-grey">
                <div class="date_kitchen-display d-flex align-items-center text-secondary">
                    <i class="bx bx-calendar fs-4"></i>
                    <span class="ms-2">{{ now() }}</span>
                </div>

                <div class="timer-display fs-2 fw-bolder">
                    <span class="timer__part fs-2">00 : 00</span>
                </div>

                <div class="filter_kitchen-display">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Status</option>
                        <option value="1">Noted</option>
                        <option value="2">Sedang dimasak</option>
                        <option value="3">Selesai</option>
                    </select>
                </div>
            </div>
        </header>
    </div>

    <div class="page-wrappwer mt-5">
        <div class="container-xxl w-100">
            <div class="row">

                @foreach ($pesanan as $item)
                {{-- @dd($item) --}}
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-head__kitchen d-flex align-items-center justify-content-between pb-3 border-bottom-grey p-4">
                                <div>
                                    <h6 class="fw-bolder" style="font-size:12px;">{{ $item->kode_pesanan }}</h6>
                                    <span style="opacity: .7;">{{ $item->pelanggan->nama ?? 'Tamu' }}</span>
                                </div>
                                <span class="badge rounded-pill bg-secondary text-white">{{ $item->status_pesanan ?? 'prosess' }}</span>
                            </div>
                            <div class="card-body">
                                

                                <ul class="detail-pesan_kitchen">
                                    @foreach ($item->detail_pesanan as $item2)
                                        <li class="py-2 d-flex align-items-center justify-content-between border-bottom-grey">
                                            <div>
                                                <div class="count"><b class="fw-bold">{{ $item2->qty }}</b>x</div>
                                                <span>{{ $item2->produk->nama_produk ?? '' }}</span>
                                            </div>
                                            <button type="button" class="btn d-flex align-items-center justify-content-center py-2 mt-1"
                                                data-bs-toggle="modal" data-bs-target="#detail-pesan_list">
                                                <i class="bx bx-info-circle fs-5"></i>
                                            </button>



                                            <div class="modal fade" id="detail-pesan_list" tabindex="-1"
                                                aria-labelledby="detail-pesan_listLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-detail-pesan_list">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detail-pesan_listLabel">Detail
                                                                Pesanan</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"><i
                                                                    class="bx bx-x"></i></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul class="info-pelanggan pb-3 border-bottom-grey">
                                                                <li>
                                                                    Kode Pesanan :
                                                                    <span>#{{ $item->kode_pesanan }}</span>
                                                                </li>
                                                                <li class="mt-2">
                                                                    <span>Pelanggan : </span>
                                                                    <span>{{ $item->pelanggan->nama ?? 'tamu' }}</span>
                                                                </li>
                                                            </ul>
                                                                <div class="info-produk-pesan py-3">
                                                                    <div
                                                                    class="d-flex align-items-center justify-content-between border-bottom-grey pb-3">
                                                                    <h6>{{$item2->produk->nama_produk}}</h6>
                                                                    <div class="count"><b class="fw-bold">{{$item2->qty}}</b>x</div>
                                                                </div>
                                                                <ul class="variant py-3 border-bottom-grey">
                                                                    <li class="variant_head fw-bolder"> Variant :</li>
                                                                    @if ($item->varian)
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                                                            <li class="my-2 me-2">
                                                                                <i class="bx bx-check me-1"></i>
                                                                                Pedas Bingits
                                                                            </li>
                                                                            <li class="my-2 me-2">
                                                                                <i class="bx bx-check me-1"></i>
                                                                                Orek Tempe
                                                                            </li>
                                                                            <li class="my-2 me-2">
                                                                                <i class="bx bx-check me-1"></i>
                                                                                Teh Manis
                                                                            </li>
                                                                            <li class="my-2 me-2">
                                                                                <i class="bx bx-check me-1"></i>
                                                                                Teh Manis
                                                                            </li>
                                                                            <li class="my-2 me-2">
                                                                                <i class="bx bx-check me-1"></i>
                                                                                Teh Manis
                                                                            </li>
                                                                        </div>
                                                                        @else
                                                                        -
                                                                    @endif
                                                                </ul>

                                                                <ul class="mt-3">
                                                                    <li>
                                                                        <b class="fw-bolder">Note : </b>
                                                                        <p class="mt-1">
                                                                            {{$item2->catatan}}
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>

                                <div class="footer_kitchen  bg-light mt-4 d-flex align-items-center justify-content-between">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-prosess__kitchen"
                                        href="?pesanan={{ $item->id }}&status=dimasak">Prosess</a>
                                        <a class="btn btn-success btn-done__kitchen ms-2"
                                        href="?pesanan={{ $item->id }}&status=selesai">Selesai</a>
                                    </div>
                                    <div class="me-3">
                                        <span class="fs-6 fw-bolder timer__part--perpesanan">00:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <script>

                

    </script>




    <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('assets') }}/js/feather.min.js"></script>

    <script src="{{ asset('assets') }}/js/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('assets') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets') }}/plugins/select2/js/select2.min.js"></script>

    <script src="{{ asset('assets') }}/js/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datetimepicker.min.js"></script>

    <script src="{{ asset('assets') }}/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.mask.min.js"></script>
    <script src="{{ asset('assets') }}/js/timer-countdown.js"></script>

</body>

</html>
