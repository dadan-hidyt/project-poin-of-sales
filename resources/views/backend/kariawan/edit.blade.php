@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Tambah Kariawan</div>
                <div class="p-5">
                    <a class="btn btn-warning btn-sm" href="{{ route('dashboardkariawan.index') }}"><i
                            class="fa fa-users"></i>List Kariawan</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboardkariawan.update', $karyawan->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nik" class="form-label">NIK(No Induk Kariawan)</label>
                        <input value="{{ $karyawan->nik }}" type="text" name="nik" @class(['form-control', $errors->has('nik') ? 'is-invalid' : ''])>
                        @error('nik')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Karyawan</label>
                        <input type="text" value="{{ $karyawan->nama }}" name="nama" @class(['form-control', $errors->has('nama') ? 'is-invalid' : ''])>
                        @error('no_telp')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" @class(['form-control', $errors->has('alamat') ? 'is-invalid' : '']) cols="30" rows="5">{{ $karyawan->alamat }}</textarea>
                        @error('alamat')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="" class="form-label">No Telp</label>
                                <input value="{{ $karyawan->no_telp }}" name="no_telp" type="text"
                                    @class(['form-control', $errors->has('no_telp') ? 'is-invalid' : ''])>
                                @error('no_telp')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <select name="jk" @class(['form-control', $errors->has('jk') ? 'is-invalid' : ''])>
                                    <option @selected($karyawan->jk === 'L') value="L">L</option>
                                    <option @selected($karyawan->jk === 'P') value="P">P</option>
                                </select>
                                @error('jk')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Avatar</label>
                        <input name="avatar" type="file" accept="image/*" @class(['form-control', $errors->has('avatar') ? 'is-invalid' : ''])>
                        @error('avatar')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
