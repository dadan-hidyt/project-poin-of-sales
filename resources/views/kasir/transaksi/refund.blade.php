<x-kasir-layout>
  
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header py-2 border-1 border-bottom">
                        <h3 class="card-title mt-4">Transaksi Refund - Saung Teko</h2>
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
                                                    edit
                                                </button>
                                                <button type="button" class="btn btn-info text-white btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPelanggan">
                                                    refund
                                                </button>
                                                <button type="button" class="btn btn-danger text-white btn-sm" id="confirm-color">delete
                                                </button>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editPelanggan" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-editPelanggan border-0">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editPelangganLabel">Edit Pelanggan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" id="namaPelanggan" value="Jhoone Bae" placeholder="Nama Pelanggan">
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" id="no.phone" value="+62891283213682" placeholder="No.Phone">
                                                            </div>
                                        
                                                            <button type="submit" class="btn btn-primary w-100">Simpan</button>
                                                        </form>
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