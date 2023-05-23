<form wire:submit.prevent='update' action="">
    <div class="row">
        <div class="col-md-6 form-group">
            <label class="d-block" for="">Berapa Potongan untuk <b class="fw-bolder">10 Poin</b> pelanggan? <span class="text-danger">*</span></label>
            <input wire:model='potongan_per_10_poin' type="number" min="0" class="form-control">
            
        </div>
        <div class="col-md-6">
            <label for="">Reward Poin Saat ini</label>
            <input type="text" class="form-control" placeholder="10 Poin = Rp.{{ formatRupiah($default) }}" disabled>
        </div>
    </div>
    <div class="form-group"><input type="submit" value="Simpan" class="btn btn-primary">
        <div wire:loading wire:target='update'>Menyimpan...</div>
    </div>
</form>
