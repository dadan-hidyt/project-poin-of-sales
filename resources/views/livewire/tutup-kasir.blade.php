<div class="row mt-4">
    <!-- Data Laporan -->
    <div class="col-md-7">
        <div class="card data-laporan">
            <div class="card-body">
                <div class="_title py-2 pb-3 d-flex align-items-center justify-content-between border-1 border-bottom ">

                    <h4 class="fw-bolder">Tutup Kasir - <span>Kasir</span></h4>
                    <div class="_detail mb-2 me-3 d-flex align-items-center">
                        <div class="waktu-buka me-5">
                            <h6 class="fw-bold opacity-4 mb-2">BUKA KASIR</h6>
                            <span class="d-flex align-items-center"><i class="bx bx-calendar fs-5 me-2"></i> {{ $kasir['waktu_masuk'] }}</span>
                        </div>
                        <div class="waktu-tutup">
                            <h6 class="fw-bold opacity-4 mb-2">TUTUP KASIR</h6>
                            <span class="d-flex align-items-center"><i class="bx bx-calendar fs-5 me-2"></i> -</span>
                        </div>
                    </div>
                </div>
                <div class="_body mt-4">

                    <form wire:key='form-set-sisa-kas' wire:submit.prevent='setSisaKas'>
                        <div class="mb-3">
                            <input wire:model.defer='sisa_kas' value="{{ $sisa_kas }}" type="text" class="form-control inputNominal" id="nominalKasSisa" aria-describedby="kasSisaHelp" placeholder="Masukan Nominal Kas">
                            <div id="kasSisaHelp" class="form-text mt-2">Uang Kas Yang dipegang oleh kasir saat tutup</div>
                        </div>
                        <div class="mb-3">
                            <input wire:model.defer='pin' type="Password" minlength="0" maxlength="4" class="form-control" id="nominalKasSisa" aria-describedby="kasSisaHelp" placeholder="Konfimarsi PIN">
                            <div id="kasSisaHelp" class="form-text mt-2">Konfimarsi PIN</div>
                        </div>
                        <div class="py-3 border-1 border-top btn-tutupKasir">
                            <button type="submit" class="btn btn-primary">Tutup Kasir</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @if ($sisa_kas)
        
    <div class="col-md-5 laporan-penjualan">
        <div class="card">
            <div class="card-body">
                <div class="_title py-2 pb-3 d-flex align-items-center justify-content-between border-1 border-bottom ">
                    <h4 class="fw-bolder">Laporan Penjualan</h4>
                </div>

                <div class="_body ">
                    <div class="d-flex align-items-center py-3  border-1 border-bottom">
                        <div class="waktu-buka me-5">
                            <h6 class="fw-bold opacity-4 mb-2 fs-7">BUKA KASIR</h6>
                            <span class="d-flex align-items-center"><i class="bx bx-calendar fs-5 me-2"></i> {{ $kasir['waktu_masuk'] }}</span>
                        </div>
                        <div class="waktu-tutup">
                            <h6 class="fw-bold opacity-4 mb-2 fs-7 ">TUTUP KASIR</h6>
                            <span class="d-flex align-items-center"><i class="bx bx-calendar fs-5 me-2"></i> Tgl, Waktu</span>
                        </div>
                    </div>
                    <div class="py-3 d-flex fw-bolder align-items-center justify-content-between border-1 border-bottom">
                        <h6 class="fs-6 fw-bolder ">Modal Awal :</h6>
                        <span>Rp. {{ $kasir['kas_awal'] }}</span>
                    </div>

                    <div class="py-3 border-1 border-bottom">
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Pemasukan Kas :</h6>
                            <span>Rp.{{ formatRupiah($data['jumlah_pendapatan']) }}</span>
                        </div>
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Pengeluaran Kas : </h6>
                            <span>Rp. {{ formatRupiah($kas_awal - (int)str_replace('.','',$sisa_kas)) }}</span>
                        </div>
                        
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Sisa Kas :</h6>
                            <span>Rp. {{ $sisa_kas }}</span>
                        </div>

                    </div>

                    {{-- <div class="py-3 border-1 border-bottom">
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Cash :</h6>
                            <span>Rp.0</span>
                        </div>
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Transfer Bank :</h6>
                            <span>Rp.0</span>
                        </div>
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">E-Wallet :</h6>
                            <span>Rp.0</span>
                        </div>
                    </div>
                    <div class="py-3 border-1 border-bottom">
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Total Tunai :</h6>
                            <span>Rp.126.468</span>
                        </div>
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Total Non Tunai :</h6>
                            <span>Rp.126.468</span>
                        </div>
                    </div> --}}
                    <div class="py-3 border-1 border-bottom">
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Pendapatan Transaksi :</h6>
                            <span>Rp. {{ $data['jumlah_pendapatan'] }} Dari {{ $data['total_transaksi'] }} Transaksi</span>
                        </div>
                        <div class="py-1 d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 ">Pendapatan + Sisa Kas :</h6>
                            <span>Rp. {{ $data['jumlah_pendapatan'] + (int)str_replace('.','',$sisa_kas) }}</span>
                        </div>
                    </div>
                    <div class="py-3 border-1 border-bottom">
                        <div class="d-flex align-items-center" style="margin-top: 5px;">
                            <div class="form-check me-4">
                                <input name="click" wire:model='print_type' class="form-check-input" type="radio" value="laporan_only" id="print0">
                                <label class="form-check-label" for="print0">
                                    Print Laporan
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="click" wire:model='print_type' class="form-check-input" type="radio" value="produk_terjual" id="print1">
                                <label class="form-check-label" for="print1">
                                    Print Produk yang terjual
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <button wire:click='selesai' class="btn btn-warning text-white w-100 d-flex align-items-center justify-content-center">
                            <i class="bx bx-dish fs-4 me-2"></i>
                            <span>Selesai</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>
