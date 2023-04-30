<x-kasir-layout>
  
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header py-2 border-1 border-bottom">
                        <h3 class="card-title mt-4">Semua Transaksi - Saung Teko</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table  datanew ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Pesan</th>
                                        <th>Pelanggan</th>
                                        <th>Dana Masuk</th>
                                        <th>Kembalian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($transaksi as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>#{{ $item->kode_transaksi }}</td>
                                        <td>
                                            {{ $item->pelanggan->nama ?? 'No Pelanggan' }}
                                        </td>
                                        <td class="text-success">Rp.{{ formatRupiah($item->jumlah ?? '') }}</td>
                                        <td class="text-info">Rp.{{ formatRupiah($item->jmlh_bayar ?? '') }}</td>
                                        <td class="d-flex align-items-center">

                                            <button type="button" class="btn btn-warning text-white btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPelanggan">
                                                edit
                                            </button>
                                            <button type="button" class="btn btn-info text-white btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPelanggan">
                                                refund
                                            </button>
                                            <button type="button" class="btn btn-danger text-white btn-sm" id="confirm-color">delete
                                            </button>
                                        </td>
                                    </tr>

                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</x-kasir-layout>