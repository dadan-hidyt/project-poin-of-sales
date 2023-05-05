@if ($edit === true)
    <form action="" wire:submit.prevent='update'>
    @else
        <form action="" wire:submit.prevent='store'>
@endif
<div class="form-group">
    <label for="karyawan">Karyawan</label>
    <select @class([
        'form-control',
        $errors->has('akun.id_kariawan') ? 'is-invalid' : '',
    ]) wire:change="chooseKaryawan($event.target.value)"
        wire:model.defer='akun.id_kariawan'>
        <option value="">--Pilih Karyawan--</option>
        @foreach ($karyawans as $item)
            @empty(!$item->user)
                <option disabled value="{{ $item->id }}">{{ $item->nama }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endempty
        @endforeach
    </select>
    @error('akun.id_karyawa')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="role">role</label>
    <select @class([
        'form-control',
        $errors->has('akun.role') ? 'is-invalid' : '',
    ]) wire:model.defer='akun.role'>
        <option value="">--Pilih role--</option>
        <option value="kasir">Kasir</option>
        <option value="manager">Manager</option>
    </select>
    @error('akun.role')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="" class="form-label">Nama</label>
    @if (empty($akun['nama_user']))
        <input @class([
            'form-control',
            $errors->has('akun.nama_user') ? 'is-invalid' : '',
        ]) disabled readonly placeholder="Pilih dulu karyawan" type="text">
    @else
        <input readonly wire:model='akun.nama_user' class="form-control" type="text">
    @endif
    <div wire:loading wire:target='chooseKaryawan' class="form-text">Mohon tunggu..</div>
    @error('akun.nama_user')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="email" class="form-label">Alamat Email</label>
    <input @class([
        'form-control',
        $errors->has('akun.email') ? 'is-invalid' : '',
    ]) wire:model.defer='akun.email' type="email" class="form-control">
    @error('akun.email')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="">Pin</label>
    <input type="text" wire:model.defer='akun.login_token' minlength="4" maxlength="4"
        @class([
            'form-control',
            $errors->has('akun.login_token') ? 'is-invalid' : '',
        ])>
    @error('akun.login_token')
        <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <div class="row">
        <div class="col-6">
            <label for="password">Password</label>
            <input type="password" wire:model.defer='akun.password' @class([
                'form-control',
                $errors->has('akun.password') ? 'is-invalid' : '',
            ])>
            @error('akun.password')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-6">
            <label for="confirm_password">confirm password</label>
            <input type="password" wire:model.defer='akun.password_confirmation ' @class([
                'form-control',
                $errors->has('akun.password_confirmation') ? 'is-invalid' : '',
            ])>
            @error('akun.password_confirmation')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
<div class="form-group">
    <button class="btn btn-primary">Tambah</button>
</div>
</form>

@push('script')
    <script>
        window.addEventListener('feedback', (det) => {
            Swal.fire({
                icon: det.detail.type,
                text: det.detail.message,
                title: det.detail.type,
            })
        })
    </script>
@endpush
