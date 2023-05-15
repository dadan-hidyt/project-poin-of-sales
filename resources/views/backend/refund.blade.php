@extends('layouts.backend')

@section('main')
    <div class="col-12">
        @error('gagal_hapus_produk')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        @error('berasil_hapus_produk')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="card card-custom">
            <div class="card-header py-3 border-1 border-bottom">
                <div class="card-title">
                    <h3 class="card-label h3 fw-bolder mt-2">Daftar Data Minta Refund</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('dashboard.product.item.tambah') }}" class='btn btn-success'><i
                            class="fa fa-plus"></i>Tambah</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table id="tabel" class="table table-head-custom table-head-bg table-bordered table-vertical-center"
                    id="tabel_produk" style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Kasir</th>
                            <th>Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($refund as $item)
                            <tr>
                                <td>{{ $item->transaksi->kode_transaksi }}</td>
                                <td>{{ $item->transaksi->kasir->user->nama_user ?? '-' }}</td>
                                <td>{{ $item->transaksi->pelanggan->nama ?? '-' }}</td>
                                <td>{{ $item->transaksi->tanggal_order ?? '-' }}</td>
                                <td>
                                    {{ $item->status === "Y" ? 'Diterima' : 'Ditolak' }}
                                </td>
                                <td>
                                    Rp. {{ formatRupiah($item->transaksi->jumlah) }}
                                </td>
                                <td>
                                    @if ($item->status === 'Y')
                                    <a class="btn btn-danger btn-sm" href="{{ route('dashboard.refund.accept') }}?id={{ $item->id }}">Batalkan</a>
                                    @else
                                    <a class="btn btn-primary btn-sm" href="{{ route('dashboard.refund.accept') }}?id={{ $item->id }}">Terima</a>
                                    @endif
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                        data-target="#detail-{{$loop->iteration}}">
                                        Detail
                                    </button>


                                </td>
                            </tr>


                            <!-- Modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="detail-{{$loop->iteration}}" tabindex="-1" aria-labelledby="label-{{$loop->iteration}}"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="label-{{$loop->iteration}}">Detail Transaksi #{{$item->transaksi->kode_transaksi}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>Total Item: &nbsp;{{ $item->transaksi->detailTransaksi->count() }}</div>
                                            
                                            <h6>ITEM PRODUK:</h6>
                                            @foreach ($item->transaksi->detailTransaksi as $item2)
                                                <hr>
                                                <div>
                                                    Nama Produk: {{$item2->produk->nama_produk}}
                                                </div>
                                                <div>
                                                    Harga: {{$item2->produk->harga_jual}}
                                                </div>
                                                <div>
                                                    Qty: {{$item2->jumlah}}
                                                </div>
                                                <hr>
                                            @endforeach
                                            <hr>
                                               <div>Jumlah: Rp. {{formatRupiah($item->transaksi->jumlah)}}</div>
                                            <hr>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>

                <!--end: Datatable-->
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('#tabel').DataTable({})
    </script>
@endpush
