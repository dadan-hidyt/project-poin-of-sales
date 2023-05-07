@extends('layouts.backend')


@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header py-3 border-1 border-bottom">
                <div class="card-title">
                    <span>Edit Pelanggan</span>
                </div>
                <div class="card-toolbar">
                    <a class="btn btn-warning btn-sm" href="{{ route('dashboard.pelanggan.show') }}"><i
                            class="fa fa-arrow-left"></i>Back</a>
                </div>
            </div>
            <div class="card-body">
                @livewire('form-edit-pelanggan', ['pelanggan' => $pelanggan], key($pelanggan->id))
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
            window.addEventListener('gaga;', (e) => {
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
