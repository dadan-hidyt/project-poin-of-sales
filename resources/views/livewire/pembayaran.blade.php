{{-- @dd($pesanan) --}}

<div class="container-md p-5">
    <div class="row">

        <div class="col-md-4">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="d-flex flex-column  pb-3 border-1 border-bottom">
                        <span class="text-secondary">Kode pesanan</span>
                        <h4 class="fw-bolder">Rincian Pesanan</h4>
                    </div>
                    <div class="product-table mt-3" style="height:260px;">

                        @if ($pesanan->detail_pesanan)
                            @foreach ($pesanan->detail_pesanan as $item)
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg p-0">
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-3 fs-14">{{ $item->qty }}x</h6>
                                            <div class="d-flex flex-column">
                                                <h6 class="fw-bolder fs-16">{{ $item->produk->nama_produk }}</h6>
                                                @if ($item->catatan != null)
                                                    <span>{{ $item->catatan }}</span>
                                                @endif
                                                <span class="text-secondary fs-7" style="width: 160px;word-wrap: break-word;">Jangan Terlalu banyak sayur</span>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fw-bolder fs-14">Rp. {{ number_format($item->produk->harga_jual * $item->qty, 2, ',', '.') }} </li>
                                </ul>
                            @endforeach
                        @endif

               
                    
                    </div>
                    <div class="mt-4 border-1 border-top">
                        <div class="d-flex align-items-center justify-content-between py-3 border-1 border-bottom">
                            <h6 style="font-size:16px;" class="fw-bolder">Jenis Order :</h6>
                            <h6 style="font-size:16px;" class="text-dark-75">Free Table</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border-1 border-bottom">
                            <h6 style="font-size:16px;" class="fw-bolder">Subtotal :</h6>
                            <h6 style="font-size:16px;" class="text-dark-75">Rp. {{ number_format($pesanan->hitungPesanan()['subtotal'], 2, ',', '.') }}</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border-1 border-bottom">
                            <h6 style="font-size:16px;" class="fw-bolder">Pajak :</h6>
                            <h6 style="font-size:16px;" class="text-dark-75">Rp.{{ number_format($pesanan->hitungPesanan()['pajak'], 2, ',', '.') }}</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border-1 border-bottom">
                            <h6 style="font-size:16px;" class="fw-bolder">Total Tagihan :</h6>
                            <h6 style="font-size:16px;" class="fw-bolder text-dark-75">Rp.{{ $pesanan->hitungPesanan()['grand_total_rupiah'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    Sedang di buat, Solve error yang lain dulu
                </div>
            </div>
        </div>

    {{-- <div class="card rounded-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="fw-bolder">Rincian Pesanan</h4>
                </div>
            </div>
        </div>
    </div> --}}
    </div>
</div>