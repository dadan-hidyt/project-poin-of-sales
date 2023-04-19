<form wire:submit.prevent='tambah' action="">
    <div class="form-group">
        <label for="tambah-kategori">Tambah Kategori</label>
        <input type="text" placeholder="Ketikan nama kategori" class="form-control" wire:model.defer='kategori.nama_kategori'>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>

