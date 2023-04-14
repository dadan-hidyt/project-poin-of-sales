@push('style')
    <style>
        .preview {
            cursor: pointer;
        }

        #logo-coose-file {
            display: none;
        }

        .label-upload {
            cursor: pointer;
            margin: 10px 0px;
            display: block;
        }

        .label-upload:hover {
            color: red;
        }
    </style>
@endpush
<form action="" wire:submit.prevent='simpan'>
    <div class="form-group">
        <label for="namaWeb">Nama Web</label>
        <input type="text" class="form-control" wire:model='pengaturan.nama_web'>
    </div>
    <div class="form-group">
        <label for="logo">Logo</label>
        <div class="logo-preview">
            @empty($this->pengaturan['logo'])
                <img class="img preview img-thumbnail" width="80px" src="" alt="logo">
            @else
                <img class="img preview  img-thumbnail" width="80px" src="{{ asset($this->pengaturan['logo']) }}"
                    alt="">
            @endempty
        </div>
        <input id="logo-coose-file" type="file" wire:model='logo' class="form-control">
        <label class="label-upload" for="logo-coose-file"> <i class="fa fa-upload"></i> Pilih File</label>
        <span wire:loading wire:target='logo'>Mengupload...</span>
    </div>
    <div class="form-group">
        <label for="NamaUsaha">Nama Usaha</label>
        <input type="text" class="form-control" wire:model='pengaturan.nama_usaha'>
    </div>
    <div class="form-group">
        <label for="alamat_usaha">Alamat Usaha</label>
        <textarea name="" class="form-control" id="" cols="30" rows="4"
            wire:model='pengaturan.alamat_usaha'></textarea>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="email">Email Usaha</label>
                <input type="text" class="form-control" id="email" wire:model='pengaturan.email_usaha'>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="no_telpon_usaha">No Hp Usaha</label>
                <input type="text" class="form-control" id="no_telpon_usaha" wire:model='pengaturan.no_telpon_usaha'>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="akun_instagram">Akun Instagram</label>
                <input type="text" class="form-control" id="akun_instagram" wire:model='pengaturan.akun_instagram'>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="chanel_yt">Chanel YT</label>
                <input type="text" class="form-control" id="chanel_yt" wire:model='pengaturan.chanel_yt'>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="akun_fb">Akun Fb</label>
                <input type="text" class="form-control" id="no_telpon_usaha" wire:model='pengaturan.akun_fb'>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" wire:model='pengaturan.website'>
            </div>
        </div>
    </div>
    <div class="m-2">
        <span wire:loading wire:target='simpan'>Menyimpan perubahan...</span>
    </div>
    <div class="mt-4">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>
@push('script')
    <script>
        window.addEventListener('sukses', function() {
            Swal.fire({
                title: "Sukses",
                icon: 'success',
                text: 'Pengaturan Berhasil di ubah!'
            });
        })
        window.addEventListener('gagal', function() {
            Swal.fire({
                icon: 'error',
                title: "gagal",
                text: 'Pengaturan Berhasil di ubah!'
            });
        })
        $(document).ready(function() {
            $('.preview').on('click', function() {
                $('#logo-coose-file').click();
            });
        })
    </script>
@endpush
