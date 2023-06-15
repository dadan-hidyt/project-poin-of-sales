<div class="row mt-2">
    <div class="col-lg-7 col-sm-12 tabs_wrapper">
        <div class="tab_control d-flex justify-content-between gap-2">
            <div class="btn-group btn_category">
                <button type="button" class="btn border text-dark dropdown-toggle px-4" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Kategori
                </button>
                <ul class="dropdown-menu py-1">
                    @foreach (App\Models\KategoriProduk::all() as $item)
                    <li><a wire:click='filterKategori("{{$item->id}}")' class="dropdown-item" href="#">{{$item->nama_kategori}}</a></li>
                    @endforeach
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

                @include('kasir.include.pos.list-product')

            </div>
        </div>

    </div>
    <div class="col-lg-5 col-sm-12 ml-4 card">
        <div class="card card-order">
            <div class="card-body p-2 pb-0">
                <div class="order-list py-2 pb-3">
                    <div class="orderid w-100">
                        <div class="py-2 border-1 border-bottom pb-3 d-flex align-items-center justify-content-between">
                            <div class="orderid_head ">
                                <span class="opacity-5">#{{ $pesanan->kode_pesanan }}</span>
                                <h3 class="fw-bolder">
                                    Pesanan Saat Ini
                                </h3>
                            </div>
                            @if ($pesanan->type === 'MEJA')
                                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#editPesanan">
                                    <i class="bx bx-edit fs-6"></i>
                                </button>

                                <div class="modal fade" id="editPesanan" tabindex="-1" aria-labelledby="editPesananLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editPesananLabel">Edit Pesanan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i></button>
                                        </div>
                                        <form class="modal-body" action="{{ route('kasir.pesanan.edit', $pesanan->id) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="meja">Pindah Meja</label>
                                                <select class="form-select mt-2" aria-label="Default select example" name="meja">
                                                    <option value="{{ $pesanan->meja->id }}">{{ $pesanan->meja->nama }}</option>
                                                    @foreach (App\Models\Meja::all() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pelanggan">Ganti Pelanggan</label>
                                                <select class="form-select mt-2" aria-label="Default select example" name="pelanggan">
                                                    <option value="{{ $pesanan->pelanggan->id }}">{{ $pesanan->pelanggan->nama }}</option>
                                                    @foreach (App\Models\Pelanggan::all() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-4"><button class="btn btn-primary w-100" type="submit">Simpan</button></div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="orderid-detail border-1 border-bottom py-2">
                            <div class="d-flex align-items-center justify-content-between py-2">
                                <h5 class="fw-bolder opacity-7">Jenis Pesan :</h5>
                                @if ($pesanan->type === 'MEJA')
                                    <span>{{ $pesanan->type }} - {{ $pesanan->meja->nama ?? '' }}</span>
                                @else
                                    <span>{{ $pesanan->type }}</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center justify-content-between py-2">
                                <h5 class="fw-bolder opacity-7">Pelanggan :</h5>
                                <span>{{ $pesanan->pelanggan->nama ?? '' }}</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between py-2">
                                <h5 class="fw-bolder opacity-7">Poin Pelanggan :</h5>
                                <span>{{ $pesanan->pelanggan->poin ?? '' }}</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-body p-2 " style="margin-top: -49px;">
                <div class="totalitem py-2 border-bottom border-1">
                    <h4>Total items :{{ $pesanan->detail_pesanan->count() }}</h4>
                    <a onclick="handlerClick()" href="javascript:void(0);">Clear all</a>
                </div>
                @include('kasir.include.pos.product-table')
            </div>
            <div class="split-card">
            </div>

            @include('kasir.include.pos.list-detail-pesanan')


        </div>
    </div>
</div>

@if (session()->has('success'))

    <script>alert(`{{ session('success') }}`)</script>    

@endif
@if (session()->has('failUpdate'))

    <script>alert(`{{ session('failUpdate') }}`)</script>    

@endif



<x-slot name="footer_script">
    <script>
        window.addEventListener('delete_detail_pesanan_berhasil', (e)=>{
            Livewire.emit('refreshComponent')
            $(`#detail-${e.detail}`).modal('hide');
            notyf.success('Item berhasil di hapus dari daftar pesanan!');
        })
        window.addEventListener('produk_berhasil_di_tambahkan', (e) => {
            Livewire.emit('refreshComponent');
            notyf.success('Item berhasil di hapus dari daftar pesanan!');
            $(`#product-${e.detail}`).modal('hide');
        });
        window.addEventListener('produk_sudah_ada', () => {
            notyf.error('Produk ini sudah di tambahkan sebelumnya!');
        });
        window.addEventListener('voucher_tidak_ditemukan', () => {
            notyf.error('Kode Voucher tidak di temukan!');
        });
        window.addEventListener('reward_berhasil_di_set', (e) => {
            notyf.success(`Reward Berhasil Di Claim`);
        });
        window.addEventListener('detail_pesanan_di_bersihkan', () => {
            notyf.success('Semua item pesanan berhasil di bersihkan!');
        });

 
        function handlerClick(){
            const notification = notyf.success('Apakah anda yakin ingin menghapus semua item dari pesanan. Click here to continue');
            notification.on('click',(target,event)=>{
                Livewire.emit('clearDetailPesanan');
            })
        }

    </script>
</x-slot>
