<div class="card-body p-2 pb-3">
    <div class="setvalue py-2 border-1 border-bottom">
        <ul>
            <li>
                <h5>Subtotal </h5>
                <h6>Rp. {{ number_format($pesanan->hitungPesanan()['subtotal'], 2, ',', '.') }}</h6>
            </li>
            <li>
                <h5>Pajak </h5>
                <h6>Rp. {{ number_format($pesanan->hitungPesanan()['pajak'], 2, ',', '.') }}</h6>
            </li>
            <li>
                <h5>Diskon </h5>
                <h6>-Rp. {{ $pesanan->jumlah_potongan_voucher }}</h6>
            </li>
            <li class="total-value">
                <h5>Total </h5>
                <h6>
                    @if($pesanan->jumlah_potongan_voucher)
                    <del style="color:red;">
                        Rp.{{ number_format(($pesanan->hitungPesanan()['subtotal'] + $pesanan->hitungPesanan()['pajak']), 2, ',', '.') }}
                        
                    </del>
                    &nbsp;Rp.{{ number_format(($pesanan->hitungPesanan()['subtotal'] + $pesanan->hitungPesanan()['pajak']) - $pesanan->jumlah_potongan_voucher ?? 0, 2, ',', '.') }}
                    @else
                    Rp.{{ number_format(($pesanan->hitungPesanan()['subtotal'] + $pesanan->hitungPesanan()['pajak']), 2, ',', '.') }}
                    @endif
                    
                </h6>
            </li>
        </ul>
    </div>
    {{-- <div class="point_form d-flex align-items-center justify-content-between gap-2 mt-3">
        <div class="point d-flex align-items-center gap-1">
            <p class="mb-0">Tukarkan Point</p><i class='bx bx-info-circle'></i><span>Rp.3000</span>
        </div>
        <input id="s1" type="checkbox" class="switch">
    </div> --}}
    <div class="btn_group gap-2 mt-4 w-100" style="height:42px ;">
        @if ($pesanan->detail_pesanan->count() != 0)
            {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran-simpan"
                class="btn btn-warning text-white fs-6 fw-normal">
                <h5>Simpan</h5>
            </button> --}}
            {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran"
                class="btn btn-success text-white fs-6 fw-normal w-100">
                <h6>Lanjutkan Pembayaran</h6>
            </button> --}}

            <form action="{{ route('kasir.pesanan.bayar',$pesanan->kode_pesanan) }}">
                <label for="">Pilih Metode Pembayaran <span class="text-danger">*</span> </label>
                <select class="form-select mt-2" aria-label=".form-select-sm lanjutkan pembayaran" name="metode">
                    <option selected>Pilih Metode Pembayaran</option>
                    <option value="cash">Cash</option>
                    <option value="transfer">Transfer</option>
                    <option value="qris">E-Wallet</option>
                </select>
                
                <button type="submit" class="btn btn-success w-100 mt-4">
                    Lanjut Pembayaran
                </button>
            </form>
        @endif
    </div>
</div>



{{-- <div wire:ignore.self class="modal fade" id="pilihPembayaran" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Pilih Metode Bayar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div> --}}
