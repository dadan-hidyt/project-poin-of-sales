@extends('layouts.backend')

@section('main')
    
<div class="row card">
    <div class="card-body">
        <div class="_head pb-5 border-1 border-bottom d-flex align-items-center justify-content-between">
            <div>
                <h4 class="h4">Pengaturan Poin Reward</h4>
                <span class="opacity-75">Sesuaikan Poin dan Reward yang akan anda berikan</span>
            </div>
            <a href="{{ route('dashboard.poin_reward.tampil') }}" class="btn btn-warning">
                <span>Kembali</span>
            </a>
        </div>

        <div class="_body" style="margin-top : 30px;">
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="">Berapa Potongan untuk <b class="fw-bolder">10 Poin</b> pelanggan? <span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control">
                                <div class="d-flex mt-2 align-items-center">
                                    <input type="checkbox" name="kelipatan" id="kelipatan" style="margin-right: 10px;">
                                    <span style="margin-top : 2px;">Berlaku Kelipatan</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Reward Poin Saat ini</label>
                                <input type="text" class="form-control" placeholder="10 Poin = Rp.1000" disabled>
                            </div>
                        </div>
                        <div class="form-group"><input type="submit" value="Simpan" class="btn btn-primary"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
