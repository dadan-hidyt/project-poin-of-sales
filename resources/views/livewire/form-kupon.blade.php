@if ($type === 'edit')
    <form action="" wire:submit.prevent='simpanEdit'>
    @else
        <form action="" wire:submit.prevent='simpan'>
@endif
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="kode_kupon">Kode Kupon</label>
            <input wire:model.defer='kupon.kode_kupon' type="text" class="form-control">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="nama_kupon">Nama Kupon</label>
            <input wire:model.defer='kupon.nama_kupon' type="text" class="form-control">
        </div>
    </div>

</div>
<div class="form-group">
    <label for="produk">Produk</label>
    <select class="form-control" wire:model.defer='kupon.id_produk' name="" id="select-produk">
        <option style="width:100%" value="null">Semua</option>
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
            <label for="jmlh_kupon" class="form-label">Jumlah Kupon</label>
            <input type="number" wire:model.defer='kupon.jumlah_kupon' class="form-control">
            <small class="text-primary"><i>Kosongkan jika jumlah kupon tidak terbatas!</i></small>
        </div>
        <div class="col-6">
            <label for="jmlh_potongan" class="form-label">Jumlah Potongan (Dalam Rupiah)</label>
            <input type="number" wire:model.defer='kupon.jumlah_potongan' class="form-control" placeholder="e:g 29000">
        </div>
    </div>
</div>

<div class="form-group">
    <label class="form-label">Batas Waktu</label>
    <div class="input-group input-group date" id="kt_datetimepicker_3" data-target-input="nearest">
        <input wire:model.defer='kupon.masa_berlaku' type="text" class="form-control form-control datetimepicker-input" id="bataswaktu"
            placeholder="Select date & time" data-target="#kt_datetimepicker_3" />
        <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
            <span class="input-group-text">
                <i class="ki ki-calendar"></i>
            </span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-3 form-label">Tidak Ada Batas Waktu</label>
        <div class="col-3">
            <span class="switch">
                <label>
                    <input wire:model.defer='kupon.masa_berlaku_checked' type="checkbox" id="switch" name="select" />
                    <span></span>
                </label>
            </span>
        </div>

    </div>
<div class="form-group">
    <label for="" class="form-label">Deskripsi</label>
    <textarea name="" id=""  wire:model.defer='kupon.deskripsi_kupon' class="form-control" cols="30" rows="5"></textarea>
</div>
<div class="form-group">
    <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
</div>
    </form>

    @push('script')
        <script>
            $("#switch").on('change', (e) => {
                (e.target.checked === true) ? $('#bataswaktu').attr('disabled', true): $('#bataswaktu').attr('disabled',false);
            })
        </script>
    @endpush
