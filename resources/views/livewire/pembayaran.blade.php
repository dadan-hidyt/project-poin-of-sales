<div class="form-pembayaran p-4 shadow-1 card px-3">
    <div class="card-body">

        <div class="text-center mb-4">
            <span class="opacity-7">#{{ $pesanan->kode_pesanan }}</span>
            <h3 class="fw-bolder">Prosess Pembayaran</h3>
        </div>

        <div action="#" >
            <div class="total_bill card px-4">
                <div class="card-body text-center">
                    <span class="opacity-7">Total Tagihan</span>
                    <h3 class="fw-bolder">Rp.{{ $pesanan->hitungPesanan()['grand_total_rupiah'] }}0</h3>
                </div>
            </div>
            <h6 class="pb-4 ms-3">Jumlah Uang: Rp. {{ formatRupiah($jumlah_bayar) ?? '0' }}</h6>
            <div class="payment_options d-flex">
                <button wire:click='setUang("pas")' class="card mx-2 btn" id="jumlahUang">
                    <div class="card-body">
                        <h4>Uang Pas</h4>
                    </div>
                </button>
                <button wire:click='setUang(100000)' class="card mx-2 btn" id="jumlahUang">
                    <div class="card-body">
                        <h4>Rp.100.000</h4>
                    </div>
                </button>
                <button wire:click='setUang(50000)' class="card mx-2 btn" id="jumlahUang">
                    <div class="card-body">
                        <h4>Rp.50.000</h4>
                    </div>
                </button>
                <button class="card mx-2 btn" data-bs-toggle="modal" data-bs-target="#JumlahLain"
                    id="jumlahUang">
                    <div class="card-body">
                        <h4>Lainnya</h4>
                    </div>
                </button>
            </div>

            <button wire:click='bayar' type="submit" class="btn btn-warning text-white w-100">Lanjut Pembayaran</button>
            
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
                    <input wire:keyup='setUang($event.target.value)' type="number" class="form-control" placeholder="Jumlah Lain" name=""
                        id="inputNominal">
                </div>
                <button type="submit" class="btn btn-warning w-100 text-white">Simpan</button>
            </div>
        </div>
    </div>
</div>