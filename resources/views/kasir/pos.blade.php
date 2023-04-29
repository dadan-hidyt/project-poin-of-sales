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


<div class="modal fade" id="ubahProduk" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Ubah Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body pt-4 pb-5 px-4">
                <div class="row">
                    <div class="col-6">
                        <div class="pick_detail_img">
                            <img src="assets/img/product/product31.jpg" alt="">
                        </div>
                        <div class="productprice mt-3">
                            <h4 class="mb-1 fw-bold">Orange</h4>
                            <h5>Rp. 40.000,00</h5>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                        <div class="increment-decrement">
                            <div class="input-groups">
                                <input type="button" value="-" class="button-minus dec button">
                                <input type="text" name="child" value="0" class="quantity-field">
                                <input type="button" value="+" class="button-plus inc button">
                            </div>
                        </div>
                    </div>
                    <form action="" class="col-6 form_selectproduct">
                        <div class="form-group">
                            <label for="variasi">Pilih Variasi</label>
                            <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                <option value="Original">Original</option>
                                <option value="Pedas">Pedas</option>
                                <option value="Pedas2">Pedas Banget</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn_addorder" value="Ubah Pesanan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</x-kasir-layout>