<div class="product-table" style="height:120px">

    @if ($pesanan->detail_pesanan)
        @foreach ($pesanan->detail_pesanan as $item)
            <ul class="product-lists ">
                <li>
                    <div class="productimg">
                        <div class="productimgs">
                            <img src="{{ asset('storage/' . $item->produk->gambar_produk) }}" alt="img">
                        </div>
                        <div class="productcontet">
                            <div class="qty d-flex gap-2 align-items-center">
                                <h4>{{ $item->produk->nama_produk }}</h4><span class="text-secondary">x
                                    {{ $item->qty }}</span>
                            </div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#detail-{{ $item->id }}"
                                class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                <i class='bx bx-info-circle text-white me-1'></i>
                                <h5 class="fs-7">Detail</h5>
                            </button>
                        </div>
                    </div>
                </li>
                <li>Rp. {{ number_format($item->produk->harga_jual * $item->qty, 2, ',', '.') }} </li>
            </ul>
            <div wire:ignore.self class="modal fade" id="detail-{{ $item->id }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 rounded-3">
                        <div class="modal-header py-4 px-4">
                            <h5 class="modal-title">Detail Pesanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class='bx bx-x fs-4'></i></button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="detail_img">
                                        <img src="{{ asset('storage/' . $item->produk->gambar_produk) }}"
                                            alt="{{ $item->produk->gambar_produk }}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1">Nama Produk : {{ $item->produk->nama_produk }}</p>
                                    <p class="mb-1">Harga/pcs : Rp.
                                        {{ number_format($item->produk->harga_jual, 2, ',', '.') }}</p>
                                    <p class="mb-1">Variasi : {{ $item->varian }}</p>
                                    <p class="mb-1">Jumlah : {{ $item->qty }}</p>
                                    <p class="mb-1">Total : Rp.
                                        {{ number_format($item->produk->harga_jual * $item->qty, 2, ',', '.') }}</p>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="mb-1 ">Catatan :</p>
                                    <p style="font-style: italic;">Cepat</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer px-4 border-top d-flex justify-content-end">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#ubahProduk-{{ $item->id }}"
                                class="btn btn-primary btn_closedetail">Ubah</button>
                            <button wire:click='hapusDetailPesanan("{{ $item->id }}")' class="btn btn-danger btn_closedetail">Hapus <span wire:loading wire:target='hapusDetailPesanan'>Menghapus...</span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore class="modal fade" id="ubahProduk-{{ $item->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content border-0 rounded-3">
                        <div class="modal-header py-4 px-4">
                            <h5 class="modal-title">Ubah Pesanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class='bx bx-x fs-4'></i></button>
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
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo
                                        aperiam similique deserunt eius!</p>
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
                                        <select name="" id="variasi" class="form-control"
                                            style="font-size: 14px !important;">
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
        @endforeach
    @endif

</div>
