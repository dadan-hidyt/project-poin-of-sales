<form wire:submit.prevent='tambah' action="">
    <div class="form-group">
        <label for="tambah-kategori">Tambah Kategori</label>
        <input type="text" class="form-control" wire:model.defer='kategori.nama_kategori'>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>
