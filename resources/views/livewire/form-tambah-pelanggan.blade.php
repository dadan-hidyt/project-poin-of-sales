<form wire:submit.prevent='tambah' class="form" id="kt_form">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" wire:model.defer="pelanggans.nama" @class([
                    'form-control',
                    'is-invalid' => $errors->has('pelanggans.nama'),
                ])>
                @error('pelanggans.nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span>
                    </div>
                    <input wire:model.defer='pelanggans.email' type="text" @class([
                        'form-control',
                        'is-invalid' => $errors->has('pelanggans.email'),
                    ])
                        placeholder="Email">

                </div>
                @error('pelanggans.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_hp" class="form-label">No Hp</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span>
                    </div>
                    <input wire:model.defer='pelanggans.no_hp' type="text" @class([
                        'form-control',
                        'is-invalid' => $errors->has('pelanggans.no_hp'),
                    ])
                        placeholder="Phone">
                </div>
                @error('pelanggans.no_hp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_hp" class="form-label">Alamat</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i
                                class="la la-street-view"></i></span>
                    </div>
                    <input wire:model.defer='pelanggans.alamat' type="text" @class([
                        'form-control form-control-lg',
                        'is-invalid' => $errors->has('pelanggans.alamat'),
                    ]) placeholder="Ketikan Alamat">
                </div>
                @error('pelanggans.alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_hp" class="form-label">Point</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i
                                class="la la-money-check-alt"></i></span>
                    </div>
                    <input  wire:model.defer='pelanggans.poin' min="0" type="number" class="form-control "
                        placeholder="masukan point yang akan di berikan">
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i
                                class="la la-calendar"></i></span>
                    </div>
                    <input wire:model.defer='pelanggans.tanggal_lahir' type="date" class="form-control" placeholder="Tanggal Lahir">
                </div>
            </div>

            <div class="form-group">
                <label for="kota" class="form-label">Kota</label>
                <select wire:model.defer='pelanggans.kota'  name="" style="width:100%" class="form-control" id="select_kota">
                    <option value="null">Tidak Ada</option>
                    @foreach (config('web.kab_kota') as $item)
                        <option value="{{ $item['nama'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio-inline">
                    <label class="radio radio-rounded">
                        <input type="radio" value="L" wire:model='pelanggans.jenis_kelamin' name="jk" />
                        <span></span>
                        L
                    </label>
                    <label class="radio radio-rounded">
                        <input type="radio" value="P" wire:model='pelanggans.jenis_kelamin' name="jk" />
                        <span></span>
                        P
                    </label>

                </div>
                @error('pelanggans.jenis_kelamin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-primary"><i class="la la-plus"></i>Kirim</button>
            </div>
        </div>

    </div>
</form>

@push('script')
    <script>
        $('#select_kota').select2({
            width: 'resolve'
        })
    </script>
@endpush
