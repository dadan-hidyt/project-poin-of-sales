<div class="row">
    <span wire:loading wire:target='search_term'>Mencari...</span>
    @empty(!$product)
        @foreach ($product as $item)
            <div class="col-lg-3 col-sm-6 d-flex">
                <button class="productset flex-fill" type="button" data-bs-toggle="modal"
                    data-bs-target="#product-{{ $item->id }}">
                    <div class="productsetimg">
                        <img src="{{ asset('storage/'.$item->gambar_produk) }}"
                            alt="product" class="mt-1">
                        <div class="qty">
                            <div class="box">
                                Stok :
                                @if ($item->stok === null)
                                    Unlimited
                                @else
                                    {{ $item->stok }}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="productsetcontent text-start">
                        <span>{{ $item->kategori->nama_kategori ?? 'Tanpa kategori' }}</span>
                        <h5>{{ $item->nama_produk }}</h5>
                        <h4>Rp. {{ number_format($item->harga_jual, 2, ',', '.') }}</h4>
                    </div>
                </button>
            </div>


            <div wire:ignore.self class="modal fade" id="product-{{ $item->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content border-0 rounded-3">
                        <div class="modal-header py-4 px-4">
                            <h5 class="modal-title">Pilih Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                        </div>
                        <div class="modal-body pt-4 pb-5 px-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="pick_detail_img">
                                        <img src="{{ asset('storage/'.$item->gambar_produk) }}"
                                            alt="">
                                    </div>
                                    <div class="productprice mt-3 d-flex flex-column align-items-start pb-3 border-1 border-bottom">
                                        <h6 class="mb-1 fw-bold">{{ $item->nama_produk }}</h6>
                                        <h5 class="text-dark">Rp.{{ number_format($item->harga_jual, 2, ',', '.') }}</h5>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="fw-bolder">Deskripsi</h6>
                                        <p class="mt-2">{{ $item->deskripsi ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    @if ($item->varian->count() > 0)
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Pilih Varian <span class="text-danger">*</span></label>
                                            
                                            <select wire:model='item_pesanan.varian' name="" id="variasi" class="form-control"
                                            style="font-size: 14px !important;">
                                                <option selected value="">--Pilih Varian--</option>
                                                @foreach ($item->varian as $item1)
                                                    <option value="{{ $item1->nama_varian }}">
                                                        {{ $item1->nama_varian }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <textarea class="form-control" placeholder="Tambahkan Catatan" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jumlah Menu <span class="text-danger">*</span></label>
                                        <input type="number" wire:model.defer='item_pesanan.qty' maxlength="{{ $item->stok }}" minlength="1" value="1" class="form-control">
                                    </div>
                                    <div class="mb-3 w-100">
                                        <input wire:click='simpanItemPesanan({{ $item->id }})' type="submit" class="btn btn-warning text-white w-100" value="Tambah ke Keranjang">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        @endforeach
    @else
        <span>Tidak ada produk dengan kata kunci <b>{{ $search_term }}</b></span>
    @endempty

</div>