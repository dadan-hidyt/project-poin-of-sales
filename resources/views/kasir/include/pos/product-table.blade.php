<div class="product-table">
                   
    @if ($pesanan->detail_pesanan)
        @foreach ($pesanan->detail_pesanan as $item)
        <ul class="product-lists">
            <li>
                <div class="productimg">
                    <div class="productimgs">
                        <img src="{{ asset("storage/".$item->produk->gambar_produk) }}"
                            alt="img">
                    </div>
                    <div class="productcontet">
                        <div class="qty d-flex gap-2 align-items-center">
                            <h4>{{ $item->produk->nama_produk }}</h4><span class="text-secondary">x {{ $item->qty }}</span>
                        </div>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#detail-{{ $item->id }}"
                            class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                            <i class='bx bx-info-circle text-white me-1'></i>
                            <h5 class="fs-7">Detail</h5>
                        </button>
                    </div>
                </div>
            </li>
            <li>Rp. {{ number_format(($item->produk->harga_jual * $item->qty),2,',','.') }} </li>
        </ul>
        <div class="modal fade" id="detail-{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 rounded-3">
                    <div class="modal-header py-4 px-4">
                        <h5 class="modal-title">Detail Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                    </div>
                    <div class="modal-body px-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="detail_img">
                                    <img src="{{ asset("storage/".$item->produk->gambar_produk) }}" alt="{{ $item->produk->gambar_produk }}">
                                </div>
                            </div>
                            <div class="col-8">
                                <p class="mb-1">Nama Produk : {{ $item->produk->nama_produk }}</p>
                                <p class="mb-1">Harga/pcs : Rp. {{ number_format($item->produk->harga_jual,2,',','.') }}</p>
                                <p class="mb-1">Variasi : {{ $item->varian }}</p>
                                <p class="mb-1">Jumlah : {{ $item->qty }}</p>
                                <p class="mb-1">Total : Rp. {{ number_format(($item->produk->harga_jual * $item->qty),2,',','.') }}</p>
                            </div>
                            <div class="col-12 mt-3">
                                <p class="mb-1 ">Catatan :</p>
                                <p style="font-style: italic;">Cepat</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer px-4 border-top d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ubahProduk" class="btn btn-primary btn_closedetail">Ubah</button>
                        <a href="" class="btn btn-danger btn_closedetail">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
  
</div>