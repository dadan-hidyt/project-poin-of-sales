<form class="form">
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="pilih-kategori-produk">Pilih Kategori</label>
        <select style='width:100%;' name="" id="pilih-kategori-produk">

        </select>
    </div>
    <div class="form-group">
        <label for="deskripsi-produk">Deskripsi Produk</label>
        <textarea class="form-control" name="" id="deskripsi-produk" cols="30" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" class="form-control">
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Harga Jual:</label>
            <input type="text" class="form-control" id="harga-jual" placeholder="Enter contact text" />
            <span class="form-text text-muted">Please enter your contact</span>
        </div>
        <div class="col-lg-4">
            <label>Pajak Produk:</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-info-circle"></i></span>
                </div>
                <input type="text" class="form-control"  id="pajak" placeholder="Fax number" />
            </div>
            <span class="form-text text-muted">Please enter fax</span>
        </div>
        <div class="col-lg-4">
            <label>Harga Jual:</label>
            <div class="input-group">
                <input id="harga-jual" type="text" class="form-control" placeholder="Enter your address" />
                <div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span>
                </div>
            </div>
            <span class="form-text text-muted">Please enter your address</span>
        </div>
    </div>
</form>

@push('script')
    <script>
        $('#pilih-kategori-produk').select2({
            placeholder: 'Pilih Kategori Produk',
            width: 'resolve',
            allowClear: true,
            ajax: {
                url: "{{ route('dashboard.product.item.ajax.kategori') }}",
            }
        });

        //mask
        $('#harga-jual').mask('0.000.000.000', {
            reverse: true
        });
        $('#pajak').mask('0.000.000.000', {
            reverse: true
        });
        $('#harga-beli').mask('0.000.000.000', {
            reverse: true
        });
    </script>
@endpush
