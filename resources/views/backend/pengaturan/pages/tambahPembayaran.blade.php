@extends('layouts.backend')



@section('main')


    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3 class="mt-3">Tambah Pembayaran Non tunai</h3>
                <a 
                    href="{{ route('dashboard.pengaturan.daftarTampil') }}"
                    id="button_tambah_pembayaran" 
                    class="btn btn-warning"
                >
                    Kembali
                </a>

            </div>
            <div class="card-body">
                @error('success')
                    <div class="alert alert-success alert-dismissible  fade show" role="alert" style="margin-bottom:40px;">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> 
                @enderror
                @error('debit_name')
                    <div class="alert alert-danger alert-dismissible  fade show" role="alert" style="margin-bottom:40px;">
                        Debit atau CC sudah Tersedia!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> 
                @enderror
               
                <form action="" method="post">
                    @csrf

                    <div class="form-group">
                        <div class="my-3 d-flex justify-content-between align-items-center">
                            <label for="">Nama Pembayaran
                                <span class="text-danger">*</span>
                            </label>

                            <input  type="text" 
                                    class="form-control" 
                                    id="#"
                                    placeholder="Example : BCA" 
                                    style="width:80%"
                                    name="debit_name"
                                    required
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="my-3 d-flex justify-content-between align-items-center">
                            <label for="">Kategori
                                <span class="text-danger">*</span>
                            </label>

                            <select 
                                class="form-control py-3" 
                                name="pay_category"
                                style="width:80%"
                                required
                            >
                                <option value="Debit">--Pilih Ketegori--</option>
                                <option value="Debit">Debit</option>
                                <option value="CC">CC</option>
                            </select>
                            @error('pay_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="my-3 d-flex justify-content-end align-items-center">
                            <input  type="submit" 
                                    class="btn btn-primary" 
                                    value="Simpan"
                            >
                        </div>
                    </div>

                        
                </form>



            </div>
        </div>
    </div>


    


@endsection
