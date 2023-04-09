@if ($type === 'edit')
    <form action="" wire:submit.prevent='simpanEdit'>
    @else
        <form action="" wire:submit.prevent='simpan'>
@endif
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="kode_kupon">Kode Kupon</label>
            <input wire:model.defer='kupon.kode_kupon' type="text" @class([
                'form-control',
                $errors->has('kupon.kode_kupon') ? 'is-invalid' : '',
            ])>
            @error('kupon.kode_kupon')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="nama_kupon">Nama Kupon</label>
            <input wire:model.defer='kupon.nama_kupon' type="text" @class([
                'form-control',
                $errors->has('kupon.nama_kupon') ? 'is-invalid' : '',
            ])>
            @error('kupon.nama_kupon')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
<div class="form-group">
    <label for="produk">Produk</label>
    <select class="form-control" wire:model.defer='kupon.id_produk' name="" id="select-produk">
        <option style="width:100%" value="">Semua</option>
        @forelse ($product as $item)
            <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
        @empty
            <option value="">--tidak--</option>
        @endforelse
    </select>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="jmlh_kupon" class="form-label">Jumlah Kupon</label>
                <input type="number" wire:model.defer='kupon.jumlah_kupon' class="form-control">
                <small class="text-primary"><i>Kosongkan jika jumlah kupon tidak terbatas!</i></small>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="jmlh_potongan" class="form-label">Jumlah Potongan (Dalam Rupiah)</label>
                <input type="number" wire:model.defer='kupon.jumlah_potongan' @class([
                    'form-control',
                    $errors->has('kupon.jumlah_potongan') ? 'is-invalid' : '',
                ])
                    jumlah_potongan placeholder="e:g 29000">
                @error('kupon.jumlah_potongan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="form-label">Batas Waktu</label>
    <div class="input-group input-group date" id="" data-target-input="nearest">
        <input wire:model.defer='kupon.masa_berlaku' type="date"
            class="form-control form-control datetimepicker-input" id="bataswaktu" />
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="ki ki-calendar"></i>
            </span>
        </div>

    </div>

    <div class="form-group mt-3">
        <label>
            <input wire:model.defer='kupon.masa_berlaku_checked' wire:ignore type="checkbox" @checked($this->kupon['masa_berlaku'] == null)
                id="switch" name="select" />
        </label>
        <label for="switch" class="col-3 form-label">Tidak Ada Batas Waktu</label>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Deskripsi</label>
        <textarea name="" id="" wire:model.defer='kupon.deskripsi_kupon' @class([
            'form-control',
            $errors->has('kupon.deskripsi_kupon') ? 'is-invalid' : '',
        ])
            cols="30" rows="5"></textarea>
        @error('kupon.deskripsi_kupon')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
    </div>
    </form>
</div>
@push('script')
    <script>
        $("#switch").on('change', (e) => {
            (e.target.checked === true) ? $('#bataswaktu').attr('disabled', true): $('#bataswaktu').attr('disabled',
                false);
        })
    </script>
@endpush
