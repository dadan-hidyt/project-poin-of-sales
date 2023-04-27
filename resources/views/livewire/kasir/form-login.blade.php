<form wire:submit.prevent='doLogin' class="login-form py-3 px-5 d-flex flex-column justify-content-center border-1 border">
    <div class="form-login_head py-4 d-flex align-content-center justify-content-center">
        <img src="{{ asset('kasir-assets') }}/img/logo.png" alt="Logo-saungteko">
    </div>
    <div class="form-login_body">
        <select wire:model.defer='id_user' class="form-select mb-3" aria-label="Default select example">
            <option selected>Pilih Petugas Kasir</option>
            @foreach ($user as $item)
                <option value="{{ $item->id }}">{{ $item->nama_user }}</option>
            @endforeach
        </select>
        <div class="form-group mb-3">
            <input wire:model.defer='pin' type="password" maxlength="4" minlength="0" placeholder="Masukan PIN">
        </div>
        <div class="form-group mb-3">
            <input type="submit" name="Login" class="btn btn-warning text-white w-100" value="Masuk">
            <span wire:loading wire:target='doLogin'>loading...</span>
        </div>
    </div>
    <div class="form-login_footer py-4 text-center opacity-4">
        <span>&copy; Copyright Saung Teko 2023</span>
    </div>
</form>
