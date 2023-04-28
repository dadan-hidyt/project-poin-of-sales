<div wire:ignore.self class="modal fade" id="tambahPesanan" tabindex="-1" aria-labelledby="tambahPesananLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-tambahPesanan">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPesananLabel">Tambah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bx bx-x"></i></button>
                </div>
                <div class="modal-body">
                    @livewire('kasir.form-tambah-pesanan')
                </div>
            </div>
        </div>
    </div>