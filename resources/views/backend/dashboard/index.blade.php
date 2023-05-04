@extends('layouts.backend')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-4 shadow-sm rounded">
                <div class="text-muted mb-3"><b>Penjualan &nbsp; <i class="fa fa-calendar"></i> {{ now() }}</b></div>
                <div class="row">
                    <div class="col-xl-3">
                        <!--begin::Stats Widget 30-->
                        <div class="card card-custom bg-info card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">2,044</span>
                                <span class="font-weight-bold text-white font-size-sm">New Customers</span>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 30-->
                    </div>

                    <div class="col-xl-3">
                        <!--begin::Stats Widget 30-->
                        <div class="card card-custom bg-primary card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <i class="icon flaticon2-user"></i>
                                <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">ss2,044</span>
                                <span class="font-weight-bold text-white font-size-sm">Total Penjualan</span>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 30-->
                    </div>

                    <div class="col-xl-3">
                        <!--begin::Stats Widget 30-->
                        <div class="card card-custom bg-info card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <i class="icon flaticon2-user"></i>
                                <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">{{ formatRupiah($total_semua_transaksi) }}</span>
                                <span class="font-weight-bold text-white font-size-sm">Semua Penjualan</span>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 30-->
                    </div>

                    
                </div>

                <hr>
                <div class="cart">
                    <div id="chart_2">

                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="row g-4">
                <!-- Produk Terlaris Hari ini -->
                <div class="col-md-6 mb-3">
                    <div class="bg-white rounded shadow-sm p-4">
                        <div>
                            <b class="text-muted text-primary">PENJUALAN TERLARIS HARI INI</b>
                        </div>
                        
                    
                    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bg-white p-3 rounded shadow-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aliquam dolor deserunt in consectetur nostrum cumque adipisci totam aut, vitae aliquid alias, nam ipsum impedit velit! Impedit odio nulla est.
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection