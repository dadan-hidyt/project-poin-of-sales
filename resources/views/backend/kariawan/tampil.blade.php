@extends('layouts.backend')

@section('main')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Karyawan</div>
                <div class="p-5">
                    <a class="btn btn-warning btn-sm" href="{{ route('dashboardkariawan.create') }}"><i
                            class="fa fa-user-plus"></i>Tambah</a>
                    <a class="btn btn-success btn-sm" href="{{ route('dashboard.akun.index') }}"><i
                            class="fa fa-user"></i>List User</a>
                </div>
            </div>
            <div class="card-body">
                @error('gagal')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                @error('sukses')
                    <p class="alert alert-success">{{ $message }}</p>
                @enderror
                <div class="table-responsive">

                    <table id="tabel-kariawan" class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                        <thead>
                            <tr class="text-left text-uppercase">
                                <th>NIK</th>
                                <th style="min-width: 250px" class="pl-7"><span>Kariawan</span></th>
                                <th style="min-width: 100px">Email</th>
                                <th style="min-width: 100px">No Telp</th>
                                <th style="min-width: 80px">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($kariawan as $item)
                                <tr>
                                    <td>
                                        <span class="d-block font-size-lg">
                                            {{ $item->nik }}
                                        </span>

                                    </td>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                            @empty($item->avatar)
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}"
                                                        class="h-75 align-self-end" alt="">
                                                </span>
                                            @else
                                                <span class="symbol-label">
                                                    <img src="{{ asset($item->avatar) }}" width="100%" height="100%"
                                                        class="h-75 align-self-end" alt="">
                                                </span>
                                            @endempty
                                        </div>
                                        <div>
                                            <span class="text-dark-75 mb-1 font-size-lg">
                                                {{ $item->nama }}
                                            </span>
                                            <span class="text-muted font-weight-bold d-block">Jabatan:
                                                {{ $item->user->role ?? 'Belum Di definisikan' }}</span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <span class="text-dark-75 d-block font-size-lg">
                                        {{ $item->user->email ?? '?' }}
                                    </span>

                                </td>
                                <td>
                                    <span class="text-dark-75 d-block font-size-lg">
                                        {{ $item->no_telp }}
                                    </span>

                                </td>

                                <td class="pr-0 text-right">
                                    <a href="{{ route('dashboardkariawan.edit',$item->id) }}" class="btn btn-light-success font-weight-bolder font-size-sm">
                                        Edit
                                    </a>
                                   
                                    <form method="POST" action="{{ route('dashboardkariawan.destroy',$item->id) }}" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-light-success font-weight-bolder font-size-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>Not Found</th>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection


@push('script')
    <script>
        window.onload = () =>{
            $('#tabel-kariawan').DataTable({})
        }
    </script>
@endpush