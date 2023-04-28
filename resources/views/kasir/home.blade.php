<x-kasir-layout>
  
    <div class="container">
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
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
                <button type="button" class="col-md-3 p-0 " data-bs-toggle="modal" data-bs-target="#detailMeja">
                    <div class="card">
                        <div class="card-body">
                            <div class="status d-flex align-items-center">
                                <img src="assets/img/dot_ready.png" class="me-2" alt="ready">
                                <span class="timer-stat fw-normal">Ready</span>
                            </div>

                            <div class="meja-info mt-5 text-end">
                                <span class="kode-meja opacity-5">
                                    #22423
                                </span>
                                <h5 class="nama-meja fw-bolder">
                                    Nama Meja
                                </h5>
                            </div>

                        </div>
                    </div>
                </button>
            </main>
        </div>

    </div>

    @include('kasir.include.buka-kasir-modal')
  
</x-kasir-layout>
