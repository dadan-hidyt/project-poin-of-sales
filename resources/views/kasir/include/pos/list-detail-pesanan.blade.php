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
    <div class="voucher_form d-flex justify-content-between gap-2 mt-4">
        <input type="text" class="form-control" wire:model='kode_voucher' placeholder="Masukan kode voucher">
        <button wire:click='setKodeVoucher' class="btn">Pakai</button>
    </div>
    <div class="py-3">
        <div class="point_form d-flex align-items-center justify-content-between gap-2 p-0">
            <select wire:model='reward.type' name="" id="variasi" class="form-control py-2" style="font-size: 14px !important;">
                <option selected>Pilih Reward</option>
                <option value="pembelian">Potongan Harga</option>
                <option value="produk">Produk</option>
            </select>
            <button wire:click='reward' class="btn btn-warning text-white">Pakai</button>
        </div>
        <div id="emailHelp" class="form-text py-2 d-flex align-items-center">
            <i class="bx bx-info-circle me-2"></i><span>Poin Pelanggan : {{ $pesanan->pelanggan->poin ?? 'Tidak Ada Poin' }}</span>
        </div>
    </div>
    <div class="btn_group gap-2 w-100" style="height:42px ;">
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
                <select class="form-select" aria-label=".form-select-sm lanjutkan pembayaran" name="metode" onchange="toggleDebitType(this)">
                    <option selected>Pilih Metode Pembayaran</option>
                    <option value="cash">Cash</option>
                    <option value="debit">Debit</option>
                    <option value="ewalet">E-Wallet</option>
                    <option value="transfer">Transfer</option>
                </select>
            
                <select class="form-select mt-3" aria-label=".form-select-sm lanjutkan pembayaran" name="debitType" id="debitTypeSelect" style="display: none;">
                    <option value="null">Pilih Debit Pembayaran</option>
                    <?php $debit = App\Models\PembayaranNonTunaiModel::all() ?>
                    @if (count($debit) > 0)
                        @foreach ($debit as $item)
                            <option value="{{ $item->debit_name }}">{{ $item->debit_name }}</option>
                        @endforeach
                    @endif
                </select>
                
                <button type="submit" class="btn btn-success w-100 mt-4">
                    Lanjut Pembayaran
                </button>
            </form>
        @endif
    </div>
</div>

<script>
    function toggleDebitType(selectElement) {
        var debitTypeSelect = document.getElementById('debitTypeSelect');
        if (selectElement.value === 'debit') {
            debitTypeSelect.style.display = 'block';
        } else {
            debitTypeSelect.style.display = 'none';
        }
    }
</script>

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
