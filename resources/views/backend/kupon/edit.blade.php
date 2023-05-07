@extends('layouts.backend')


@section('main')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3 class="mt-3">Edit Pelanggan</h3>
                <a class="btn btn-warning btn-sm" href="{{ route('dashboard.promo.kupon.show') }}"><i class="fa fa-arrow-left"></i>Back</a>
            </div>
            <div class="card-body">
                @livewire('form-kupon', ['kupon_model' => $kupon,'type'=>'edit'], key($kupon->id))
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        //loaded document
        $(document).ready(function() {
            window.addEventListener('sukses', (e) => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: e.detail,
                    showConfirmButton: false,
                    timer: 1500
                });
            });
            window.addEventListener('gagal', (e) => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'danger',
                    title: e.detail,
                    showConfirmButton: false,
                    timer: 1500
                });
            })
        })
    </script>
@endpush
