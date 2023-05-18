<form action="#" wire:submit.prevent='simpan'>
    <div class="form-group">
        <div class="mb-3">
            <label for="namaPengeluaran" class="form-label">Nama Pengeluaran <span class="text-danger">*</span></label>
            <input wire:model='data.nama_pengeluaran' type="text" class="form-control" id="namaPengeluaran"
                aria-describedby="textHelp">
            @error('data.nama_pengeluaran')
                <span class="invalid-feedback" style="display: block">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jumlahPengeluaran" class="form-label">Jumlah Pengeluaran <span
                    class="text-danger">*</span></label>
            <input wire:model='data.jumlah_pengeluaran' type="text" class="form-control" id="jumlahPengeluaran"
                aria-describedby="textHelp">
            @error('data.jumlah_pengeluaran')
                <span class="invalid-feedback" style="display: block">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="jumlahPengeluaran" class="form-label">Keterangan <span class="text-danger">*</span></label>
            <textarea wire:model='data.keterangan' class="form-control" placeholder="Tulis Keterangan" id="floatingTextarea"></textarea>
            @error('data.keterangan')
                <span class="invalid-feedback" style="display: block">{{ $message }}</span>
            @enderror
        </div>
        <div><button type="submit" class="btn btn-primary w-100">Simpan</button></div>
    </div>
</form>
