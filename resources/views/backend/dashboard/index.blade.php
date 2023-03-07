@extends('layouts.backend')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-4 shadow-sm rounded">
                <div class="text-muted mb-3"><b>Penjualan &nbsp; <i class="fa fa-calendar"></i> {{ now() }}</b></div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="row g-4">
                <!-- Produk Terlaris Hari ini -->
                <div class="col-md-6 mb-3">
                    <div class="bg-white  rounded shadow-sm p-3">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque praesentium doloribus placeat non! Esse sit facere fugiat saepe provident minus dolor nam recusandae. Voluptatem, cupiditate velit eos maiores alias aspernatur!
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