<x-kasir-layout>
  
    <div class="container">
    @if (session()->has('hapus_berhasil'))
        <p class="alert mt-4 alert-info">{{ session('hapus_berhasil'); }}</p>
    @endif
        <header class="header-home d-flex align-items-center justify-content-between">
            <div class="title">
                <h4 class="fw-bolder">Buat Pesanan</h4>
            </div>
            <div class="menu">
                <button type="button" class="btn btn-warning text-white py-2" data-bs-toggle="modal"
                    data-bs-target="#tambahPesanan">
                    Tambah Pesanan
                </button>
                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal"
                    data-bs-target="#tambahPelanggan">
                    <i class="bx bxs-user-detail" style="font-size: 18px; margin-top:4px;"></i>
                </button>
            </div>
        </header>


        <!-- Main Content -->
        <div class="container">
            @error('message')
            <p class="alert alert-info">
                {{ $message }}    
            </p>
            @enderror
            <main class="row layout-meja">
               @livewire('list-pesanan')
            </main>
        </div>

    </div>

    @include('kasir.include.buka-kasir-modal')
  
</x-kasir-layout>
