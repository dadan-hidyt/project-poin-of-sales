<x-kasir-layout>
  <div class="container">
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header py-2 border-1 border-bottom">
                    <h3 class="card-title mt-4">Pesanan Take Away - Saung Teko</h2>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pesanan as $item)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $item->kode_pesanan }}</td>
                                    <td>{{ $item->pelanggan->nama }}</td>
                                    <td class="text-success">Rp. {{ formatRupiah($item->hitungPesanan('subtotal')) }}</td>
                                    <td class="d-flex align-items-center">

                                        <a href="{{ route('kasir.pesanan.bayar',$item->kode_pesanan) }}" class="btn btn-warning text-white btn-sm me-1">
                                            Bayar Sekarang
                                        </a>

                                        <a href="{{ route('kasir.pos',$item->kode_pesanan) }}" class="btn btn-warning text-white btn-sm me-1">
                                            Lihat
                                        </a>
                                       
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