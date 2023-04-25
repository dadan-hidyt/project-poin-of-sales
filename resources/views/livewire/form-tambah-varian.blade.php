@if ($edit)
<form  wire:submit.prevent="edit" >
@else
<form  wire:submit.prevent="store" >

@endif
<div class="form-group">
        <label for="" class="form-label">Nama Varian</label>
        <input wire:model.defer="varian.nama_varian" type="text" @class(['form-control', $errors->has('varian.nama_varian') ? 'is-invalid' : ''])>
    @error('varian.nama_varian')
        <p class="invalid-feedback">
            {{ $message }}
        </p>
    @enderror
    </div>

   <div class="form-group">
    <label for="" class="form-label">Produk</label>
    <select @class(['form-control', $errors->has('varian.id_produk') ? 'is-invalid' : '']) wire:model.defer="varian.id_produk"  name="" id="">
        <option value="">--Pilih Produk--</option>
        @foreach ($produk as $item)
            <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
        @endforeach
    </select>
    @error('varian.id_produk')
    <p class="invalid-feedback">
        {{ $message }}
    </p>
@enderror
</div>


   <div class="form-group">
        <label for="" class="form-label">Harga</label>
        <input @class(['form-control', $errors->has('varian.harga') ? 'is-invalid' : '' ]) wire:model.defer="varian.harga" type="text">
        @error('varian.harga')
        <p class="invalid-feedback">
            {{ $message }}
        </p>
    @enderror
    </div>

   <div class="form-group">
        <label for="" class="form-label">Stok</label>
        <input wire:model.defer="varian.stok" type="number" @class(['form-control', $errors->has('varian.harga') ? 'is-invalid' : '' ])>
        @error('varian.stok')
        <p class="invalid-feedback">
            {{ $message }}
        </p>
    @enderror
   </div>

   <div class="form-group">
    <button class="btn btn-primary">Tambah</button>
   </div>
</form>

@push('script')
    <script>
        window.addEventListener('feedback', function(e){
            if ( e.detail.type === 'error' ) {
                Swal.fire({
                    title : e.detail.type,
                    text : e.detail.text,
                    icon : "error",
                })
            } else {
                Swal.fire({
                    title : e.detail.type,
                    text : e.detail.text,
                    icon : "warning",
                })
            }
        });
    </script>
@endpush