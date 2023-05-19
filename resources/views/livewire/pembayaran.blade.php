{{-- @dd($pesanan) --}}

<div class="container-md p-5">
    <div class="row">

        <div class="col-md-5">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="d-flex flex-column  pb-3 border-1 border-bottom">
                        <span class="text-secondary">Kode pesanan</span>
                        <h4 class="fw-bolder">Rincian Pesanan</h4>
                    </div>
                    <div class="product-table mt-3" style="height:160px;">

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
                            <h6 style="font-size:16px;" class="fw-bolder">Potongan :</h6>
                            <h6 style="font-size:16px;" class="text-danger">- Rp.24.000,00</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border-1 border-bottom">
                            <h6 style="font-size:16px;" class="fw-bolder">Total Tagihan :</h6>
                            <h6 style="font-size:16px;" class="fw-bolder text-dark-75">Rp.{{ $pesanan->hitungPesanan()['grand_total_rupiah'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <span class="text-secondary">Total Tagihan</span>
                            <h4 class="fw-bolder mt-2">Rp.{{ $pesanan->hitungPesanan()['grand_total_rupiah'] }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-success ">
                            <span class="text-secondary">Pembayaran</span>
                            <h4 class="fw-bolder mt-2 opacity-75">Rp.{{ formatRupiah($jumlah_bayar) ?? '0' }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-danger ">
                            <span class="text-secondary">Kembalian</span>
                            <h4 class="fw-bolder mt-2 opacity-75">Rp.0</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bolder text-center">Pembayaran Tunai</h4>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <button wire:click='setUang("pas")' class="card mx-2 btn w-100" id="jumlahUang">
                                <div class="card-body p-2 text-center w-100">
                                    <span>Uang Pas</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button wire:click='setUang(100000)' class="card mx-2 btn w-100" id="jumlahUang">
                                <div class="card-body p-2 text-center w-100">
                                    <span class="fs-7">Rp.100.000</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button wire:click='setUang(50000)' class="card mx-2 btn w-100" id="jumlahUang">
                                <div class="card-body p-2 text-center w-100">
                                    <span class="fs-7">Rp.50.000</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button class="card mx-2 btn w-100"  data-bs-toggle="modal" data-bs-target="#JumlahLain"
                            id="jumlahUang">
                                <div class="card-body p-2 text-center w-100">
                                    <span>Lainnya</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="card mx-2 btn w-100" id="jumlahUang" data-bs-toggle="modal" data-bs-target="#voucherClaim">
                                <div class="card-body p-2 text-center w-100">
                                    <span>Voucher Claim</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="card mx-2 btn w-100" id="jumlahUang" data-bs-toggle="modal" data-bs-target="#poinReward"> 
                                <div class="card-body p-2 text-center w-100">
                                    <span>Poin Reward</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="card mx-2 btn w-100" id="jumlahUang">
                                <div class="card-body p-2 text-center w-100">
                                    <span>Gabung Bayar</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="card mx-2 btn w-100" id="jumlahUang">
                                <div class="card-body p-2 text-center w-100">
                                    <span>Pisah Bayar</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button wire:click='bayar' type="submit" class="btn btn-warning text-white w-100">Lanjut Pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>

<div class="modal fade" id="JumlahLain" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Jumlah Lain</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input wire:model='jumlah_bayar' type="number" class="form-control" placeholder="Jumlah Lain" name=""
                        id="inputNominal">
                </div>
                <button type="submit" class="btn btn-warning w-100 text-white">Simpan</button>
            </div>
        </div>
    </div>
</div>


{{-- Modal Voucher Claim --}}

<div class="modal fade" id="voucherClaim" tabindex="-1" aria-labelledby="voucherClaimLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="voucherClaimLabel">Claim Voucher</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x text-danger"></i></button>
        </div>
        <form class="modal-body">
          <div class="mb-3">
            <div class="input-group"><input type="text" class="form-control" placeholder="Input Voucher">
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group"><input type="submit" class="form-control btn-warning text-white" Value="Claim">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

{{-- Modal Poin Reward --}}

<div class="modal fade" id="poinReward" tabindex="-1" aria-labelledby="poinRewardLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="poinRewardLabel">Poin Reward</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x text-danger"></i></button>
        </div>
        <form class="modal-body">
          <div class="card">
            <div class="card-body">
                <h6 class="fw-bolder">Nama Pelanggan</h6>
                <span>Jumlah Poin : <b>10</b> </span>
            </div>
          </div>
          <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Pilih Reward</option>
            <option value="1">Potongan Harga</option>
            <option value="2">Gratis Produk</option>
          </select>
          <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Produk</option>
            <option value="1">Produk Reward - 1</option>
            <option value="1">Produk Reward - 2</option>
            <option value="1">Produk Reward - 3</option>
            <option value="1">Produk Reward - 4</option>
          </select>
          <div id="textHelp" class="form-text mb-3">Muncul Jika reward yang dipilih adalah gratis produk</div>
          <button type="submit" class="btn btn-warning w-100 text-white">Reedem</button>


        </form>
      </div>
    </div>
  </div>