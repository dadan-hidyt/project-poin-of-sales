@extends('layouts.backend')


@section('main')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Edit Pelanggan</h5>
                <a class="btn btn-warning btn-sm" href="{{ route('dashboard.pelanggan.show') }}"><i class="fa fa-arrow-left"></i>Back</a>
            </div>
            <div class="card-body">
                @livewire('form-kupon', ['kupon_model' => $kupon,'type'=>'edit'], key($kupon->id))
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            window.addEventListener('sukses', (e) => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: e.detail,
                    showConfirmButton: false,
                    timer: 1500
                });
            })
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
