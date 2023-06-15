<form wire:submit.prevent="tambah" class="form">
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input wire:model.defer='produk.nama_produk' type="text"
            class="form-control @error('produk.nama_produk') is-invalid @enderror">
        @error('produk.nama_produk')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>


    <div class="form-group" wire:ignore>
        <label>Kategori:</label>
        <div class="input-group">
            <select wire:model.defer='produk.id_kategori_produk' style='width:90%;'  class="form-control @error('produk.id_kategori_produk') is-invalid @enderror"
                name="" id="pilih-kategori-produk">
                <option value="">---Tidak Ada---</option>
                @forelse ($kategori as $item)
                    <option value="{{ $item->id }}"> {{$item->nama_kategori}} </option>
                @empty
                   
                @endforelse
            </select>
            <div class="input-group-append">
                <button id="btn-add-new-kategori" class="btn btn-primary" type="button">Add New!</button>
            </div>
        </div>
        @error('produk.id_kategori_produk')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>


    <div class="form-group">
        <label for="deskripsi-produk">Deskripsi Produk</label>
        <textarea wire:model.defer='produk.deskripsi'
            class="form-control @error('produk.deskripsi')
            is-invalid
        @enderror" id="deskripsi-produk"
            cols="30" rows="3"></textarea>
        @error('produk.deskripsi')
            <span class="invalid-feedback">{{ $message }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input wire:model.defer='produk.stok' type="number"
                class="form-control @error('produk.stok') is-invalid @enderror">
            @error('produk.stok')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        {{-- <div class="form-group">
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
        </div> --}}

        <div class="form-group row">
            <div class="col-lg-3">
                <label>Harga Jual:</label>
                <input wire:model.defer='produk.harga_jual' type="text"
                    class="form-control @error('produk.harga_jual') is-invalid @enderror" id="harga-jual"
                    placeholder="Ketikan harga produk" />
                @error('produk.harga_jual')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-3">
                <label>Pajak Produk % :</label>
                <input type="text" wire:model.defer='produk.pajak'
                    class="form-control @error('produk.pajak') is-invalid @enderror" id="pasjak"
                    placeholder="Fax number %" />
                @error('produk.pajak')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="col-lg-3">
                <label>Harga Modal:</label>
                <input id="harga-modal" wire:model.defer='produk.harga_modal' type="text"
                    class="form-control @error('produk.harga_modal') is-invalid @enderror">
                @error('produk.harga_modal')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div> --}}
            <div class="col-lg-3">
                <label>Satuan:</label>
                <select wire:model.defer='produk.satuan'  class="form-control @error('produk.satuan') is-invalid @enderror">
                    <option value="">--Pilih Satuan--</option>
                    @foreach ($satuan as $item)
                        <option value="{{ $item->nama_satuan }}">{{ $item->nama_satuan }}</option>
                    @endforeach
                </select>
                @error('produk.satuan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- <div class="form-group" wire:ignore>
            <label for="pilih_varian">Pilih Varian</label>
            <select name="" style="width:100%" class="form-control @error('produk.id_varian') is-invalid @enderror"
                id="select-varian-produk"></select>
            @error('produk.id_varian')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div> --}}
        <div class="form-group">
            <label for="pilih_gambar">Pilih Gambar</label>
            <div class="gambar">
                <img class="img mb-3 preview img-thumbnail" width="80px" src="{{ asset('assets/img/no.png') }}" alt="logo">
            </div>
            <div wire:loading wire:target='foto'>Mengupload...</div>
            <input class="d-block" @class(['form-control', $errors->has('foto') ? 'is-invalid' : '']) wire:model='foto' type="file" id="coose_file" class="mt-4">
            @error('foto')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Tambah</button>
            <span wire:loading wire:target='tambah'>MenyimpanT...</span>
        </div>
    </form>
    <!--end::Modal-->
    @push('script')
        <script>

           function pilihGambarProduk(params) {
                const inputFile = $('#coose_file');

                inputFile.on('change',(e)=>{
                   document.getElementById('img_preview').src = URL.createObjectURL(e.target.files[0]);
                });
                
           }
           pilihGambarProduk();

            $(document).ready(function() {
                /**================UNTUK SELECT VARIAN PRODUk======================*/
                // $('#select-varian-produk').select2({
                //     placeholder: "Ketikan Varian Produk Kalau ada!",
                //     width: 'resolve',
                //     ajax: {
                //         url: "{{ route('dashboard.product.item.ajax.varian') }}",
                //     }
                // });
                // $('#select-varian-produk').on('change', () => {
                //         @this.set('produk.id_varian', $('#select-varian-produk').select2('val'));
                //     });
                //     $('#pilih-kategori-produk').on('change', function() {
                //         @this.set('produk.id_kategori_produk', $('#pilih-kategori-produk').select2('val'));
                //     })
                /**================UNTUK SELECT KATEGORI PRODUk======================*/
                // $('#pilih-kategori-produk').select2({
                //     placeholder: 'Pilih Kategori Produk',
                //     width: 'resolve',
                //     ajax: {
                //         url: "{{ route('dashboard.product.item.ajax.kategori') }}",
                //     }
                // });
               
                /**================FORMAT DUIT======================*/
                $('#harga-jual').mask('0.000.000.000', {
                    reverse: true
                });
                $('#pajak').mask('0.000.000.000', {
                    reverse: true
                });
                $('#harga-modal').mask('0.000.000.000', {
                    reverse: true
                });
            })
        </script>
    @endpush
