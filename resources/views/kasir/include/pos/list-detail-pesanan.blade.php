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
                <h6>- 10000</h6>
            </li>
            <li class="total-value">
                <h5>Total </h5>
                <h6>Rp.
                    {{ number_format($pesanan->hitungPesanan()['subtotal'] + $pesanan->hitungPesanan()['pajak'], 2, ',', '.') }}
                </h6>
            </li>
        </ul>
    </div>

    <div class="voucher_form d-flex justify-content-between gap-2 mt-4">
        <input type="text" class="form-control" placeholder="Masukan kode voucher"><button class="btn">Pakai</button>
    </div>
    <div class="point_form d-flex align-items-center justify-content-between gap-2 mt-3">
        <div class="point d-flex align-items-center gap-1">
            <p class="mb-0">Tukarkan Point</p><i class='bx bx-info-circle'></i><span>Rp.3000</span>
        </div>
        <input id="s1" type="checkbox" class="switch">
    </div>
    <div class="btn_group d-flex gap-2 mt-3" style="height:42px ;">
        @if ($pesanan->detail_pesanan->count() != 0)
            <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran-simpan"
                class="btn btn-warning text-white fs-6 fw-normal">
                <h5>Simpan</h5>
            </button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran"
                class="btn btn-success text-white fs-6 fw-normal">
                <h5>Bayar</h5>
            </button>
        @endif
    </div>
</div>
