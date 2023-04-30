<div class="row">
    <span wire:loading wire:target='search_term'>Mencari...</span>
    @empty(!$product)
        @foreach ($product as $item)
            <div class="col-lg-3 col-sm-6 d-flex">
                <button class="productset flex-fill" type="button" data-bs-toggle="modal"
                    data-bs-target="#product-{{ $item->id }}">
                    <div class="productsetimg">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
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
                                <div class="col-6">
                                    <div class="pick_detail_img">
                                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                            alt="">
                                    </div>
                                    <div class="productprice mt-3">
                                        <h4 class="mb-1 fw-bold">{{ $item->nama_produk }}</h4>
                                        <h5>Rp.{{ number_format($item->harga_jual, 2, ',', '.') }}</h5>
                                    </div>
                                    <details>
                                        <summary>Deskripsi: </summary>
                                        <p>
                                            {{ $item->deskripsi ?? '-' }}
                                        </p>
                                    </details>
                                    <div class="increment-decrement">
                                        <div class="input-groups">
                                            {{-- <input type="button" value="-"
                                                class="button-minus dec button">
                                            <input wire:change='setQty($event.target.value)' type="text" name="child" value="0"
                                                class="quantity-field">
                                            <input type="button" value="+"
                                                class="button-plus inc button"> --}}
                                            <input type="number" wire:model.defer='item_pesanan.qty' maxlength="{{ $item->stok }}" minlength="1" value="1">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form_selectproduct">
                                    @if ($item->varian->count() > 0)
                                        <div class="form-group">
                                            <label for="variasi">Pilih Variasi</label>
                                            
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
                                    <div class="form-group">
                                        <label for="">Catatan</label>
                                        <textarea wire:model='item_pesanan.catatan' name="" id="" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input wire:click='simpanItemPesanan({{ $item->id }})' type="submit" class="btn btn_addorder"
                                            value="Tambah ke Keranjang">
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