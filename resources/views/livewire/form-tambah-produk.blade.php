<form wire:submit.prevent="tambah" class="form">
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input wire:model.defer='produk.nama_produk' type="text" class="form-control">
    </div>
    <div class="form-group" wire:ignore>
        <label for="pilih-kategori-produk">Pilih Kategori</label>
        <select style='width:100%;' name="" id="pilih-kategori-produk"></select>
    </div>
    <div class="form-group">
        <label for="deskripsi-produk">Deskripsi Produk</label>
        <textarea wire:model.defer='produk.deskripsi' class="form-control" id="deskripsi-produk" cols="30" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input wire:model.defer='produk.stok' type="number" class="form-control">
    </div>

    <div class="form-group">
        <label>Poduk Favorit: ?</label>
        <div class="col-3">
            <span class="switch">
                <label>
                    <input wire:model.defer='produk.produk_favorit' value="Y" type="checkbox" checked="checked"
                        name="select" />
                    <span></span>
                </label>
            </span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-4">
            <label>Harga Jual:</label>
            <input wire:model.defer='produk.harga_jual' type="text" class="form-control" id="harga-jual"
                placeholder="Enter contact text" />
            <span class="form-text text-muted">Please enter your contact</span>
        </div>
        <div class="col-lg-4">
            <label>Pajak Produk:</label>
            <input type="text" wire:model.defer='produk.pajak' class="form-control" id="pajak"
                placeholder="Fax number" />
            <span class="form-text text-muted">Please enter fax</span>
        </div>
        <div class="col-lg-4">
            <label>Harga Harga Beli:</label>
            <input wire:model.defer='produk.harga_beli' id="harga-beli" type="text" class="form-control"
                placeholder="Enter your address" />
        </div>
    </div>
    <div class="form-group">
        <label for="pilih_varian">Pilih Varian</label>
        <select name="" style="width:100%" class="form-control" id="select-varian-produk">

        </select>
        <span class="form-text">Kosongkan Jika Tidak Pake Varian</span>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Tambah</button>
        <span wire:loading wire:target='tambah'>Menyimpan...</span>
    </div>
</form>

@push('script')
    <script>
        /**================UNTUK SELECT VARIAN PRODUk======================*/
        $('#select-varian-produk').select2({
            placeholder: "Ketikan Varian Produk Kalau ada!",
            width: 'resolve'
        });
        /**================UNTUK SELECT KATEGORI PRODUk======================*/
        $('#pilih-kategori-produk').select2({
            placeholder: 'Pilih Kategori Produk',
            width: 'resolve',
            minimumResultsForSearch: -1,
            allowClear: true,
            ajax: {
                url: "{{ route('dashboard.product.item.ajax.kategori') }}",
            }
        });
        /**================AU AH===================*/
        $('#pilih-kategori-produk').on('change', function() {
            @this.set('produk.id_kategori_produk', $('#pilih-kategori-produk').select2('val'));
        })
        /**================FORMAT DUIT======================*/
        $('#harga-jual').mask('0.000.000.000', {
            reverse: true
        });
        $('#pajak').mask('0.000.000.000', {
            reverse: true
        });
        $('#harga-beli').mask('0.000.000.000', {
            reverse: true
        });
        /**================MORE....===================*/
    </script>
@endpush
