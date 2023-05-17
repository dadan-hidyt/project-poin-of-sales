@extends('layouts.backend')

@section('main')

<style>
    html{
        scroll-behavior: smooth;
    }
</style>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="form-informasi-reward">
                        <div class="d-flex align-items-center justify-content-between pb-5 border-1 border-bottom">
                            <span class="h3 fw-bolder">Tambah Poin Reward - Produk</span>
                            <a href="#" class="btn btn-light-warning">Daftar Poin</a>
                        </div>
                        <div class="form-group mb-5" style="margin-top : 30px;">
                            <section id="informasi" style="margin: 50px 0px;">
                                <div class="my-5 d-flex align-items-center">
                                    <label for="status" class="form-label" style="width:20%;">Status<span class="text-danger">*</span></label>
                                    <div style="width:80%">
                                        <span class="switch">
                                            <label>
                                                <input wire:model.defer="produk.produk_favorit" value="Y" type="checkbox"  name="select">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="my-5 d-flex">
                                    <label for="poinrewardname" class="form-label" style="width:20%;">Nama Poin Reward <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="#" placeholder="Nama Poin Reward" style="width:80%;">
                                </div>
                                <div class="my-5 d-flex">
                                    <label for="poinrewardname" class="form-label" style="width:20%;">Deskripsi <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; width:80%;"></textarea>
                                </div>
                                <div class="my-5 d-flex">
                                    <label for="poinrewardname" class="form-label" style="width:20%;">Jumlah Poin <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="#" placeholder="Jumlah Poin" style="width:80%;">
                                </div>
                                <div class="my-5 d-flex">
                                    <label for="poinrewardname" class="form-label" style="width:20%;">Atur Produk<span class="text-danger">*</span></label>
                                    <div class="d-flex flex-column" style="width:80%;">
                                        <select class="form-control" >
                                            <option value="">--Pilih Produk--</option>
                                        </select>
                                        <div id="emailHelp" class="form-text mt-2">Lebih Baik kalo dijadikan multiple select</div>
                                    </div>
                                </div>
                            </section>
                            <section id="durasi" style="margin: 50px 0px;">
                                <div class="my-5 d-flex">
                                    <label for="poinrewardname" class="form-label" style="width:20%;">Durasi <span class="text-danger">*</span></label>
                                    <div class="d-flex justify-content-between" style="width:80%;">
                                        <label for="tanggal mulai" style="width:48%">
                                            <span>Tanggal Mulai</span>
                                            <input type="date" class="form-control mt-3 w-100" id="#">
                                        </label>
                                        <label for="tanggal mulai" style="width:48%">
                                            <span>Tanggal Berakhir</span>
                                            <input type="date" class="form-control mt-3 w-100" id="#">
                                        </label>
                                    </div>
                                </div>
                                <div class="my-5 d-flex">
                                    <label for="poinrewardname" class="form-label" style="width:20%;">Pilih Hari <span class="text-danger">*</span></label>
    
                                    <div class="d-flex flex-column" style="width:80%;">
                                        <label for="semuahari" class="d-flex align-items-center py-3 border-1 border-bottom pb-5">
                                            <input type="checkbox" name="semuahari" id="semuahari">
                                            <span class="mx-3">Semua Hari</span>
                                        </label>
                                        <div class="d-flex mt-4">
                                            <label for="senin" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="senin" id="senin">
                                                <span class="mx-3">Senin</span>
                                            </label>
                                            <label for="selasa" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="selasa" id="selasa">
                                                <span class="mx-3">Selasa</span>
                                            </label>
                                            <label for="rabu" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="rabu" id="rabu">
                                                <span class="mx-3">Rabu</span>
                                            </label>
                                            <label for="kamis" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="kamis" id="kamis">
                                                <span class="mx-3">Kamis</span>
                                            </label>
                                            <label for="jumat" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="jumat" id="jumat">
                                                <span class="mx-3">Jum'at</span>
                                            </label>
                                            <label for="sabtu" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="sabtu" id="sabtu">
                                                <span class="mx-3">Sabtu</span>
                                            </label>
                                            <label for="minggu" class="d-flex align-items-center me-3">
                                                <input type="checkbox" name="minggu" id="minggu">
                                                <span class="mx-3">Minggu</span>
                                            </label>
                                        </div>
                                    </div>
    
                                </div>
                            </section>
                        </div>

                        <div class="w-100 d-flex align-items-center justify-content-between" style="margin-top:50px;">
                            <button class="btn btn-light-primary">Simpan Draf</button>

                            <div class="d-flex">
                                <button class="btn btn-light-secondary text-dark-50">Batal</button>
                                <button class="btn btn-primary mx-3">Simpan</button>
                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#informasi">Informasi Poin Reward</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#durasi">Masa berlaku</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </div>


@endsection