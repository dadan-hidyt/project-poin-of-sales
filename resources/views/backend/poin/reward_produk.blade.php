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
                       
                        @livewire('backend.form-tambah-poin-produk')

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