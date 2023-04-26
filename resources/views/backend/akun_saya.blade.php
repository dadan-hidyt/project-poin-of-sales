@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Akun Saya</div>
                <div class="card-toolbar">
                    <a href="" class="btn btn-warning">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="">
                    <h4>Informasi Pribadi</h4>
                    <hr>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" value="{{ auth()->user()->nama_user }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="text" value="{{ auth()->user()->email }}" class="form-control">
                    </div>
                    <h4>Password</h4>
                    <hr>
                    <div class="form-group">
                        <label for="password_lama">Password Lama</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="password_baru">Password Baru</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="password_baru_ulangi">Ulangi Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer bg-primary">
                <button class="btn btn-light-success">Edit Akun</button>
                </form>
            </div>
        </div>
    </div>
@endsection
