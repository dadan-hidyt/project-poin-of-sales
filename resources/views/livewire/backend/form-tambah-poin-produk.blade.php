<form action="" wire:submit.prevent='simpan'>
    <div class="form-group mb-5" style="margin-top : 30px;">
        <section id="informasi" style="margin: 20px 0px;">
            <div class="my-5 d-flex align-items-center">
                <label for="status" class="form-label" style="width:20%;">Status<span
                        class="text-danger">*</span></label>
                <div style="width:80%">
                    <span class="switch">
                        <label>
                            <input wire:model.defer="data.status" value="Y" type="checkbox" name="select">
                            <span></span>
                        </label>
                    </span>
                </div>
                @error('data.status')
                    <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <div class="my-5 d-flex">
                    <label for="poinrewardname" class="form-label" style="width:20%;">Nama Poin Reward <span
                            class="text-danger">*</span></label>
                    <input type="text" wire:model.defer='data.nama_point_reward' class="form-control" id="#"
                        placeholder="Nama Poin Reward" style="width:80%;">

                </div>
                @error('data.nama_point_reward')
                    <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="my-5 d-flex">
                    <label for="poinrewardname" class="form-label" style="width:20%;">Deskripsi <span
                            class="text-danger">*</span></label>
                    <textarea wire:model.defer='data.deskripsi' class="form-control" placeholder="Leave a comment here"
                        id="floatingTextarea2" style="height: 100px; width:80%;"></textarea>
                </div>
                @error('data.deskripsi')
                    <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="my-5 d-flex">
                    <label for="poinrewardname" class="form-label" style="width:20%;">Jumlah Poin <span
                            class="text-danger">*</span></label>
                    <input wire:model.defer='data.jumlah_poin' type="number" class="form-control" id="#"
                        placeholder="Jumlah Poin" style="width:80%;">
                </div>
                @error('data.jumlah_poin')
                    <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="my-5 d-flex">
                    <label for="poinrewardname" class="form-label" style="width:20%;">Minumum Pembelian<span
                            class="text-danger">*</span></label>
                    <div class="d-flex flex-column" style="width:80%;">
                        <input wire:model.defer='data.min_pembelian' type="text" class="form-control w-100"
                            id="#" placeholder="Rp.10.000">
                        <label class="mt-4 d-flex align-items-center">
                            <input type="checkbox" name="check" id="check">
                            <span class="mx-3">Berlaku Kelipatan</span>
                        </label>
                    </div>

                </div>
                @error('data.jumlah_poin')
                    <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-5 d-flex">
                <label for="poinrewardname" class="form-label" style="width:20%;">Atur Produk<span class="text-danger">*</span></label>
                <div class="d-flex flex-column" style="width:80%;">
                    <select class="form-control" >
                        <option value="">--Pilih Produk--</option>
                        @foreach ($this->produk as $item)
                           <option value="{{ $item->id }}">{{$item->nama_produk}}</option>
                        @endforeach
                    </select>
                    <div id="emailHelp" class="form-text mt-2">Lebih Baik kalo dijadikan multiple select</div>
                </div>
            </div>
        </section>
        <section id="durasi" style="margin: 50px 0px;">
            <div class="my-5 d-flex">
                <label for="poinrewardname" class="form-label" style="width:20%;">Durasi <span
                        class="text-danger">*</span></label>
                <div class="d-flex justify-content-between" style="width:80%;">
                    <label for="tanggal mulai" style="width:48%">
                        <span>Tanggal Mulai</span>
                        <input wire:model.defer='data.tanggal_mulai' type="date" class="form-control mt-3 w-100"
                            id="#">
                    </label>
                    @error('data.tanggal_akhir')
                        <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                    @enderror
                    <label for="tanggal mulai" style="width:48%">
                        <span>Tanggal Berakhir</span>
                        <input wire:model.defer='data.tanggal_berakhir' type="date" class="form-control mt-3 w-100"
                            id="#">
                    </label>
                    @error('data.tanggal_berakhir')
                        <p class="invalid-feedback" style="display:block;">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="my-5 d-flex">
                <label for="poinrewardname" class="form-label" style="width:20%;">Pilih Hari <span
                        class="text-danger">*</span></label>

                <div class="d-flex flex-column" style="width:80%;">
                    <label for="semuahari" class="d-flex align-items-center py-3 border-1 border-bottom pb-5">
                        <input wire:model.defer='data.semua_hari' value="1" type="checkbox" name="semuahari"
                            id="semuahari">
                        <span class="mx-3">Semua Hari</span>
                    </label>
                    <div class="d-flex mt-4">
                        <label for="senin" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.senin' type="checkbox" name="hari1"
                                value="senin" id="senin">
                            <span class="mx-3">Senin</span>
                        </label>
                        <label for="selasa" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.selasa' type="checkbox" name="hari2"
                                value="selasa" id="selasa">
                            <span class="mx-3">Selasa</span>
                        </label>
                        <label for="rabu" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.rabu' type="checkbox" name="hari3"
                                value="rabu" id="rabu">
                            <span class="mx-3">Rabu</span>
                        </label>
                        <label for="kamis" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.kamis' type="checkbox" name="hari4"
                                value="kamis" id="kamis">
                            <span class="mx-3">Kamis</span>
                        </label>
                        <label for="jumat" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.jumat' type="checkbox" name="hari5"
                                value="jumat" id="jumat">
                            <span class="mx-3">Jum'at</span>
                        </label>
                        <label for="sabtu" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.sabtu' type="checkbox" name="hari6"
                                value="sabtu" id="sabtu">
                            <span class="mx-3">Sabtu</span>
                        </label>
                        <label for="minggu" class="d-flex align-items-center me-3">
                            <input class="hari" wire:model.defer='data.hari.minggu' type="checkbox" name="hari7"
                                value="minggu" id="minggu">
                            <span class="mx-3">Minggu</span>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="w-100 d-flex align-items-center justify-content-between" style="margin-top:50px;">
        <button class="btn btn-light-primary">Simpan Draf</button>

        <div class="d-flex">
            <button class="btn btn-light-secondary text-dark-50">Batal</button>
            <button class="btn btn-primary mx-3">Simpan</button>
        </div>
    </div>

</form>

@push('script')
    <script>
        $('#semuahari').on('click', (e) => {
            if (e.target.checked) {
                $('.hari').each(function(e, elemen) {
                    elemen.disabled = true;
                })
            } else {
                $('.hari').each(function(e, elemen) {
                    elemen.disabled = false;
                })
            }
        });
        window.addEventListener('success', () => {
            Swal.fire({
                title: 'Berhasil',
                icon: 'success',
                text: "Poin Reward Berhasil Ditambahkan"
            })
        })
        window.addEventListener('gagal', () => {
            Swal.fire({
                title: 'gagal',
                icon: 'warning',
                text: "Poin Reward gagal Ditambahkan"
            })
        })
    </script>
@endpush
