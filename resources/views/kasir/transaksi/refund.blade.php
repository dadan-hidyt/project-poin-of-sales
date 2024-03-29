<x-kasir-layout>

    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header py-2 border-1 border-bottom">
                        <h3 class="card-title mt-4">Refunds - Saung Teko</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table  datanew ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Pesan</th>
                                        <th>Pelanggan</th>
                                        <th>Subtotal</th>
                                        <th>Dana Masuk</th>
                                        <th>Kembalian</th>
                                        <th>Refund</th>
                                        <th>Tanggal Refund</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($refund as $item)
                                        <tr>
                                            <td>1</td>
                                            <td>#{{ $item->transaksi->kode_transaksi }}</td>
                                            <td>
                                                {{ $item->transaksi->pelanggan->nama ?? 'No Pelanggan' }}
                                            </td>
                                            <td class="text-info">
                                                Rp.{{ formatRupiah($item->transaksi->jumlah + $item->transaksi->jumlah_pajak ?? 0) }}
                                            </td>
                                            <td class="text-success">Rp.{{ formatRupiah($item->transaksi->jmlh_bayar) }}
                                            </td>
                                            <td class="text-info">
                                                Rp.{{ formatRupiah($item->transaksi->jmlh_bayar - ($item->transaksi->jumlah + $item->transaksi->jumlah_pajak ?? 0) ?? '') }}
                                            </td>
                                            <td>
                                                @if ($refund = $item->transaksi->refund()->first())
                                                    @if ($item->status === 'Y')
                                                        <span class='text-success'>Di Terima oleh {{ $item->user->nama_user ?? '-' }}
                                                        @elseif($item->status === 'N')
                                                            <span class='text-warning'>Sedang Di Prosess</span>
                                                    @endif
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->created_at }}
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
