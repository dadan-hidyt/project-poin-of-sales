<div class="row mt-2">
    <div class="col-lg-7 col-sm-12 tabs_wrapper">
        <div class="tab_control d-flex justify-content-between gap-2">
            <div class="btn-group btn_category">
                <button type="button" class="btn border text-dark dropdown-toggle px-4" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Kategori
                </button>
                <ul class="dropdown-menu py-1">
                    <li><a class="dropdown-item" href="#">Semua</a></li>
                    <li><a class="dropdown-item" href="#">Makanan</a></li>
                    <li><a class="dropdown-item" href="#">Minuman</a></li>
                </ul>
            </div>
            <form action="" class="search-box d-flex align-items-center">
                <input wire:model='search_term' type="text" class="form-control" placeholder="Search...">
                <input type="submit" value="" class="search-control">
                <i class='bx bx-search-alt fs-5'></i>
            </form>
        </div>

        <div class="tabs_container mt-4">
            <div class="tab_content active" data-tabs="fruits">

                <div class="row">
                    <span wire:loading wire:target='search_term'>Mencari...</span>
                    @empty(!$product)
                        @foreach ($product as $item)
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <button class="productset flex-fill" type="button" data-bs-toggle="modal"
                                    data-bs-target="#product-{{ $item->kode_produk }}">
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
                            <div wire:ignore.self class="modal fade" id="product-{{ $item->kode_produk }}" tabindex="-1">
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
                                                    @if (!empty($item->varian))
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

            </div>
        </div>

    </div>
    <div class="col-lg-5 col-sm-12 ml-4 card">
        <div class="card card-order">
            <div class="card-body p-2 pb-0">
                <div class="order-list py-2 pb-3">
                    <div class="orderid w-100">
                        <div class="orderid_head py-2 border-1 border-bottom pb-3">
                            <span class="opacity-5">#{{ $pesanan->kode_pesanan }}</span>
                            <h3 class="fw-bolder">
                                Pesanan Saat Ini
                            </h3>
                        </div>
                        <div class="orderid-detail border-1 border-bottom py-2">
                            <div class="d-flex align-items-center justify-content-between py-1">
                                <h5 class="fw-bolder opacity-7">Jenis Pesan :</h5>
                                @if ($pesanan->type ==="MEJA")
                                <span>{{ $pesanan->type }} - {{ $pesanan->meja->nama ?? '' }}</span>  
                                @else
                                <span>{{ $pesanan->type }}</span>                                  
                                @endif
                            </div>
                            <div class="d-flex align-items-center justify-content-between py-1">
                                <h5 class="fw-bolder opacity-7">Pelanggan :</h5>
                                <span>{{ $pesanan->pelanggan->nama ?? '' }}</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-body p-2 " style="margin-top: -49px;">
                <div class="totalitem py-2 border-bottom border-1">
                    <h4>Total items :{{ $pesanan->detail_pesanan->count() }}</h4>
                    <a href="javascript:void(0);">Clear all</a>
                </div>
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
            </div>
            <div class="split-card">
            </div>

            <div class="card-body p-2 pb-3">
                <div class="setvalue py-2 border-1 border-bottom">
                    <ul>
                        <li>
                            <h5>Subtotal </h5>
                            <h6>55000</h6>
                        </li>
                        <li>
                            <h5>Pajak </h5>
                            <h6>5000</h6>
                        </li>
                        <li>
                            <h5>Diskon </h5>
                            <h6>- 10000</h6>
                        </li>
                        <li class="total-value">
                            <h5>Total </h5>
                            <h6>50000</h6>
                        </li>
                    </ul>
                </div>

                <div class="voucher_form d-flex justify-content-between gap-2 mt-4">
                    <input type="text" class="form-control" placeholder="Masukan kode voucher"><button
                        class="btn">Pakai</button>
                </div>
                <div class="point_form d-flex align-items-center justify-content-between gap-2 mt-3">
                    <div class="point d-flex align-items-center gap-1">
                        <p class="mb-0">Tukarkan Point</p><i class='bx bx-info-circle'></i><span>Rp.3000</span>
                    </div>
                    <input id="s1" type="checkbox" class="switch">
                </div>
                <div class="btn_group d-flex gap-2 mt-3" style="height:42px ;">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran-simpan"
                        class="btn btn-warning text-white fs-6 fw-normal">
                        <h5>Simpan</h5>
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran"
                        class="btn btn-success text-white fs-6 fw-normal">
                        <h5>Bayar</h5>
                    </button>
                </div>
            </div>


        </div>
    </div>
</div>

<x-slot name="footer_script">
    <script>
       window.addEventListener('produk_berhasil_di_tambahkan',()=>{
            Swal.fire({
                title : "Suksess",
                icon : 'success',
                text : "Data berhasil di tambahkan!"
            })
       });
       window.addEventListener('produk_sudah_ada',()=>{
            Swal.fire({
                title : "Opps",
                icon : 'warning',
                text : "Produk yang anda pilih sudah ada di pesanan!"
            })
       });
    </script>
</x-slot>