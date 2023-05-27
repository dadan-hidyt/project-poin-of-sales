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
                                    <p class="mb-1">Variasi :
                                        @if ($varian = $item->varian()->get())
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>

                                                        <th>Nama</th>
                                                        <th>Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($varian as $item_varian)
                                                        <tr>

                                                            <th>{{ $item_varian->nama_varian }}</th>
                                                            <th>Rp.{{formatRupiah($item_varian->harga) }}</th>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </p>
                                    <p class="mb-1">Jumlah : {{ $item->qty }}</p>
                                    <p class="mb-1">Total : Rp.
                                        {{ number_format($item->produk->harga_jual * $item->qty, 2, ',', '.') }}</p>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="mb-1 fw-bolder">Catatan :</p>
                                    <p>{{ $item->catatan }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer px-4 border-top d-flex justify-content-end">
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#ubahProduk-{{ $item->id }}"
                                class="btn btn-primary btn_closedetail">Ubah</button>
                            <button wire:click='hapusDetailPesanan("{{ $item->id }}")'
                                class="btn btn-danger btn_closedetail">Hapus <span wire:loading
                                    wire:target='hapusDetailPesanan'>Menghapus...</span></button>
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
                                        <img src="{{ asset('storage/' . $item->produk->gambar_produk) }}"
                                            alt="{{ $item->produk->gambar_produk }}">
                                    </div>
                                    <div class="productprice mt-3">
                                        <h4 class="mb-1 fw-bold">{{ $item->produk->nama_produk }}</h4>
                                        <h5>Rp.{{ number_format($item->produk->harga_jual, 2, ',', '.') }}</h5>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo
                                        aperiam similique deserunt eius!</p>
                                </div>
                                <form action="" class="col-6 form_selectproduct">
                                    <div class="form-group">
                                        <label for="variasi">Pilih Variasi</label>
                                        <select name="variant[]" id="variasi"
                                            class="form-control js-example-basic-multiple"
                                            style="font-size: 14px !important;" multiple="multiple">
                                            <option value="Original">Original</option>
                                            <option value="Pedas">Pedas</option>
                                            <option value="Pedas2">Pedas Banget</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Catatan</label>
                                        <textarea name="" id="" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jumlah Menu <span
                                                class="text-danger">*</span></label>
                                        <input type="number" wire:model.defer='item_pesanan.qty'
                                            maxlength="{{ $item->stok }}" minlength="1" value="1"
                                            class="form-control">
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
