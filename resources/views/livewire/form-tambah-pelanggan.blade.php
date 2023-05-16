<form wire:submit.prevent='tambah' class="form" id="kt_form">
    <div class="form-group">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-user"></i>   </span>
            <input type="text" wire:model.defer="pelanggans.nama" placeholder="Nama Pelanggan" @class([
                'form-control',
                'is-invalid' => $errors->has('pelanggans.nama'),
            ])>
            @error('pelanggans.nama')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-envelope"></i>   </span>
            <input wire:model.defer='pelanggans.email' type="text" @class([
                    'form-control',
                    'is-invalid' => $errors->has('pelanggans.email'),
                ])
            placeholder="Email">
            @error('pelanggans.email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-phone"></i>   </span>
            <input wire:model.defer='pelanggans.no_hp' type="text" @class([
                    'form-control',
                    'is-invalid' => $errors->has('pelanggans.no_hp'),
                ])
                    placeholder="Phone">
                @error('pelanggans.no_hp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-map-alt"></i>   </span>
            <input wire:model.defer='pelanggans.alamat' type="text" @class([
                    'form-control form-control-lg',
                    'is-invalid' => $errors->has('pelanggans.alamat'),
                ]) placeholder="Ketikan Alamat">
                @error('pelanggans.alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-wallet-alt"></i>   </span>
            <input  wire:model.defer='pelanggans.poin' min="0" type="number" class="form-control "
                    placeholder="masukan point yang akan di berikan">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-calendar-alt"></i>   </span>
            <input wire:model.defer='pelanggans.tanggal_lahir' type="date" class="form-control" placeholder="Tanggal Lahir">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="bx bx-map"></i>   </span>
            <select wire:model.defer='pelanggans.kota'  name="" style="width:100%" class="form-control" id="select_kota">
                <option value="null">Tidak Ada</option>
                @foreach (config('web.kab_kota') as $item)
                    <option value="{{ $item['nama'] }}">{{ $item['nama'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio-inline d-flex align-items-center">
                <label class="radio radio-rounded">
                    <input type="radio" value="L" wire:model='pelanggans.jenis_kelamin' name="jk" />
                    <span></span>
                    L
                </label>
                <label class="radio radio-rounded ms-4">
                    <input type="radio" value="P" wire:model='pelanggans.jenis_kelamin' name="jk" />
                    <span></span>
                    P
                </label>

            </div>
            @error('pelanggans.jenis_kelamin')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-2 w-100">
            <button class="btn btn-primary w-100">Tambah Pelanggan</button>
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
