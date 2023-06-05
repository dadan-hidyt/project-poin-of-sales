@foreach ($pesanan as $item)
    <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal"
        data-bs-target="#detailMeja-{{ $item->kode_pesanan }}">
        <div class="card">
            <div class="card-body">
                <div class="status d-flex align-items-center">
                    <img src="{{ asset('kasir-assets') }}/img/dot_ready.png" class="me-2" alt="ready">
                    <span class="timer-stat fw-normal">Ready</span>
                </div>

                <div class="meja-info mt-5 text-end">
                    <span class="kode-meja opacity-5">
                        #{{ $item->kode_pesanan }}
                    </span>
                    <h5 class="nama-meja fw-bolder">
                        @if ($item->id_meja)
                            {{ $item->meja->nama }}
                        @else
                            @if ($item->type)
                                {{ strtoupper(str_replace('_',' ',$item->type)) ?? 'Tidak Di Ketahui' }}
                            @else
                                {{ strtoupper(str_replace('_',' ',$item->type)) ?? 'Tidak Di Ketahui' }}
                            @endif
                        @endif
                    </h5>
                </div>

            </div>
        </div>
    </button>

    <div class="modal fade" id="detailMeja-{{ $item->kode_pesanan }}" tabindex="-1" aria-labelledby="detailMejaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-detailMeja">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailMejaLabel">Tambah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bx bx-x"></i></button>
                </div>
                <div class="modal-body py-4">
                    <div class="container">
                        <div class="detail-meja d-flex  justify-content-between fs-6">
                            <ul>
                                <li class="my-2">Kode Pesan : <span>#{{ $item->kode_pesanan ?? '' }}</span> </li>
                                <li class="my-2">Pelanggan : <span>{{ $item->pelanggan->nama ?? 'Guest' }}</span>
                                </li>
                                <li class="my-2">Jumlah Tamu : <span>{{ $item->jumlah_pelanggan }}</span> Orang</li>
                            </ul>
                            <ul>
                                <li class="my-2">Status Bayar : <span> Belum Bayar </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top py-4">
                    <div class="container d-flex align-items-center justify-content-between">
                        <a href="{{ route('kasir.pesanan.bayar', $item->kode_pesanan) }}"
                            class="btn btn-primary p-1 py-2 px-2">Bayar</a>
                        <a href="{{ route('kasir.pos', $item->kode_pesanan) }}"
                            class="btn btn-primary p-1 py-2 px-2">Lihat</a>
                        <a href="{{  route('kasir.pesanan.delete', $item->id )  }}"
                            class="btn btn-danger p-1 py-2 px-2" onclick="return alert('Apakah Anda yakin akan menghapus data {{ $item->kode_pesanan }}')">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
