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

                                    @for($i=0;$i<24;$i++)
                                    <tr>
                                        <td>1</td>
                                        <td>#212123</td>
                                        <td>Jhone Bae</td>
                                        <td class="text-success">Rp.61.000</td>
                                        <td class="text-danger">Rp.61.000</td>
                                        <td class="d-flex align-items-center">

                                            <button type="button" class="btn btn-warning text-white btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPelanggan">
                                                Bayar Sekarang
                                            </button>
                                            <button type="button" class="btn btn-secondary text-white btn-sm me-1" data-bs-toggle="modal" data-bs-target="#">
                                                refund
                                            </button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="editPelanggan" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-editPelanggan border-0">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editPelangganLabel">Konfirmasi Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="detai-trans fs-6">
                                                        <ul>
                                                            <li class="my-2">Kode Pesan : <span>#324234</span> </li>
                                                            <li class="my-2">Pelanggan : <span>Jhone Bae</span> </li>
                                                            <li class="my-2">Jumlah Tamu : <span>10</span> Orang</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-1 border-top d-flex align-items-center justify-content-between">
                                                    <div class="total d-flex">
                                                        <h4 class="fw-bolder">Rp.145.000,00</h4>
                                                        <div class="badge text-danger">-11% Discount</div>
                                                    </div>
                                                    <a href="form-pembayaran.html" type="submit" class="btn btn-warning text-white btn-sm me-1">
                                                        Bayar Sekarang
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</x-kasir-layout>