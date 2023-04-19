<form wire:submit.prevent="tambah" action="">
    <div class="form-group">
        <label for="nomor_meja">NOMOR MEJA</label>
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">M-</i></span></div>
            <input @class([$errors->has('meja.nomor_meja') ? 'is-invalid' : '', 'form-control']) wire:model='meja.nomor_meja' type="text" placeholder="Ketikan nomor meja! eg:01" />
            @error('meja.nomor_meja')
                 <span class="invalid-feedback">{{ $message }}</span>
             @enderror
        </div>    
        <span class="form-text text-muted">Nomor meja bisa pake Abjad ABC contoh: A1</span>

    </div>
    <div class="form-group">
        <label for="nama" class="form-label">Nama meja</label>
        <input wire:model='meja.nama' @class([$errors->has('meja.nama') ? 'is-invalid' : '', 'form-control']) type="text" class="form-control">
        @error('meja.nama')
            <span class="invalid-feedback">{{ $message }}</span>
         @enderror
    </div>
    <div class="form-group">
        <label for="kapasitas" class="form-label">Kapasitas</label>
        <input wire:model='meja.kapasitas' @class([$errors->has('meja.kapasitas') ? 'is-invalid' : '', 'form-control']) type="text" class="form-control">
        @error('meja.kapasitas')
            <span class="invalid-feedback">{{ $message }}</span>
         @enderror
        </div>
    <div class="form-group">
        <label for="tersedia" class="form-label">Tersedia</label>
        <select wire:model='meja.tersedia' style="width:100%" @class([$errors->has('meja.tersedia') ? 'is-invalid' : '', 'form-control'])>
            <option value="">--Pilih Status--</option>
            <option value="1">YA</option>
            <option value="0">TIDAK</option>
        </select>
        @error('meja.tersedia')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary"> <i class="fa fa-plus-circle"></i> tambah</button>
    </div>
</form>

@push('script')
    <script>
        $('#select-tersedia').select2({
            placeholder : "Silahkan pilih status ketersediaan!",
            width : 'resolve'
        });
        window.addEventListener('gagal', function(){
            Swal.fire({
                title : "Gagal",
                icon : 'error',
                text : "Data gagal di tamahkan!"
            })
        })
    </script>
@endpush