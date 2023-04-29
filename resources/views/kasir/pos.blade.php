<x-kasir-layout>
    <div class="content">
        <div class="container container-xl px-0">
           @livewire('pos', ['pesanan' => $pesanan]);
        </div>
    </div>

<div class="modal fade" id="pilihPembayaran" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Pilih Metode Bayar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body">
                <form class="setvaluecash" action="pembayaran.html">
                    <ul>
                        <li>
                            <a disabled class="paymentmethod">
                                <input type="checkbox">
                                <img src="assets/img/icons/cash.svg" alt="img" class="me-2">
                                Tunai
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/debitcard.svg" alt="img" class="me-2">
                                Transfer
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/scan.svg" alt="img" class="me-2">
                                E-Wallet
                            </a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary w-100 mt-4">
                        Lanjut Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pilihPembayaran-simpan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Pilih Metode Bayar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body">
                <form class="setvaluecash" action="">
                    <ul>
                        <li>
                            <a disabled class="paymentmethod">
                                <input type="checkbox">
                                <img src="assets/img/icons/cash.svg" alt="img" class="me-2">
                                Tunai
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/debitcard.svg" alt="img" class="me-2">
                                Transfer
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/scan.svg" alt="img" class="me-2">
                                E-Wallet
                            </a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary w-100 mt-4" onclick="alert('Pesanan Berhasil Disimpan!')" data-bs-dismiss="modal">
                        Lanjut Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->




</x-kasir-layout>