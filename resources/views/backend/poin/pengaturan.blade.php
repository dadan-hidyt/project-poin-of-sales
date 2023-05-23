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
                  @livewire('pengaturan-poin-reward-form')
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
