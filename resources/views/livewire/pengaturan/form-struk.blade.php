<div class="row justify-content-between">
    <div class="col-md-5">
        <form action="{{ route('dashboard.pengaturan.updateStruk') }}" method="post">
            @csrf
            <div style="margin-bottom:40px;">
                <label for="info_kontak" class="form-label">Info Kontak</label>
                <input 
                    type="tel" 
                    class="form-control mt-0" 
                    id="info_kontak"
                    maxLength="13"
                    name="no_telp"
                    value="{{ old('no_telp', $this->strukModel->no_telp) }}"
                    placeholder="example : +623099388655"
                >
                @error('no_telp')
                    <span class="mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div style="margin-bottom:40px;">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input 
                    type="email" 
                    class="form-control mt-0" 
                    id="exampleInputEmail1"
                    name="email"
                    value="{{ old('email', $this->strukModel->email) }}"
                    placeholder="example@email.com"
                >
                @error('email')
                    <span class="mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div style="margin-bottom:40px;">
                <label for="alamat" class="form-label">Alamat Usaha</label>
                <input 
                    type="text" 
                    class="form-control mt-0" 
                    id="alamat"
                    name="alamat"
                    value="{{ old('alamat', $this->strukModel->alamat) }}"
                    placeholder="alamat"
                >
                @error('alamat')
                    <span class="mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div style="margin-bottom:40px;" class="form-group">
                <label for="alamat" class="form-label">Upload Logo</label>
                <input type="file" class="form-control pb-3" id="inputGroupFile01" name="logoImg">
                @error('logoImg')
                    <span class="mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div> --}}
            <div style="margin-bottom:40px;">
                <label for="alamat" class="form-label">Desripsi (Opsional)</label>
                <textarea 
                    class="form-control" 
                    placeholder="Ketikan Sesuatu" 
                    name="catatan"
                    style="max-height: 72px;min-height:72px;"
                    id="floatingTextarea">{{ old('catatan', $this->strukModel->catatan) }}</textarea>
            </div>
            @error('catatan')
                    <span class="mt-2 text-danger">{{ $message }}</span>
                @enderror
            <div style="margin-bottom:40px;">
                <input 
                    type="submit" 
                    class="btn btn-primary text-white" 
                    value="Simpan"
                >
            </div>
        </form>
        
        {{-- <div class="for">
            <div class="form-check form-switch">
                <input class="form-check-input" role="switch" id="no_telpon_cek" @checked($this->strukModel->no_telp == '1') type="checkbox" wire:change='setNoTelp($event.target.value)' value="{{$this->strukModel->no_telp}}" >
                <label class="form-check-label" for="no_telpon_cek">Tampilkan Nomor Telepon</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" role="switch" id="email_cek" @checked($this->strukModel->email == '1') type="checkbox" wire:change='setEmail($event.target.value)' value="{{$this->strukModel->email}}" >
                <label class="form-check-label" for="email_cek">Tampilkan Alamat Email</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" role="switch" id="alamat" @checked($this->strukModel->alamat == '1') type="checkbox" wire:change='setAlamat($event.target.value)' value="{{$this->strukModel->alamat}}" >
                <label class="form-check-label" for="alamat">Tampilkan Alamat</label>
            </div>
            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea wire:keyup='setCatatan($event.target.value)' id="catatan" cols="30" rows="4" class="form-control">{{ $this->strukModel->catatan }}</textarea>
            </div>
        </div> --}}

    </div>
    <div class="col-md-6 border rounded" style="padding:80px 40px;">
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Example</title>
                    <style>
                        
                        .center{
                            text-align: center;
                        }
                        .struk {
                            width: 60%;
                            margin: auto;
                        }
                        @media(max-width:720px){
                            .struk{
                                width: 100%;
                            }
                        }
                        .kontak {
                            text-align: center;
                            margin-bottom: 15px;
                        }
                        .logo {
                            text-align: center;
                        }
                        .logo img{
                            margin-left :-16px;
                            margin-bottom: 20px;
                            width:80%;
                        }
                        .nota {
                            width: 98%;
                            margin: auto;
                        }
                        .right {
                            float: right;
                            width: 100%;
                        }
                        .clearfix:before,
                        .clearfix:after {
                            content: "";
                            display: table;
                        }

                        .clearfix:after {
                            clear: both;
                        }
                        .catatan{
                            margin: 14px 0px;
                        }
                        .clearfix {
                            *zoom: 1;
                        }
                        .subtotal{
                            text-align: center;
                            font-size: 18px;
                            padding : 20px 0px;
                        }
                    </style>
                </head>
                <body>
                    <div class="struk clearfix">
                        <div class="logo">
                            <img src="{{ asset('logo.png') }}" alt="Logo">
                        </div>
                        <div class="kontak">
                            <div>{{ $this->strukModel->alamat }}</div>
                            <div>Telp : {{ $this->strukModel->no_telp }}</div>
                            <div>
                                Email : {{ $this->strukModel->email }}
                            </div>
                        </div>
                        <span>------------------------------------------------------------------------------</span>
                        <div class="nota">
                            <div>
                                <b>Nota No :</b>
                                D78234da</div>
                            <div>
                                <b>Kasir :</b>
                                Budiana Irmawansyah</div>
                            <div>
                                <b>Time :</b>
                                {{ now() }}    
                            </div>
                            <div>
                                <b>Meja :</b>
                                A01</div>
                            <div>
                                <b>Type :</b>
                                Dry In</div>
                            <div>
                                <b>Pelanggan :
                                </b>
                                [P0023] Indra
                            </div>
                        </div>
                        <span>------------------------------------------------------------------------------</span>
                        <table width="100%">
                            <tr>
                                <td>Nasi Liwet 1 Porsi</td>
                                <td>Rp. 57.000</td>
                            </tr>
                            <tr>
                                <td>Ayam bawang penyet 1 Porsi</td>
                                <td>Rp. 57.000</td>
                            </tr>
                            <tr>
                                <td>Ikan Gurame Bakar 2 Porsi</td>
                                <td>Rp. 57.000</td>
                            </tr>
                        </table>
                        <span>------------------------------------------------------------------------------</span>

                        <div class="right">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span>Subtotal</span> <span>:</span>
                                </div> 
                                <span class="fw-bolder">Rp.28.000</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span>Pajak</span> <span>:</span>
                                </div> 
                                <span class="fw-bolder">Rp.28.000</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <span>------------------------------------------------------------------------------</span>
                            <div class="subtotal">Subtotal: Rp. 230.0000</div>
                        <span>------------------------------------------------------------------------------</span>

                    @if (!empty($this->strukModel->catatan))
                    <p class="center py-5">
                    {{$this->strukModel->catatan}}
                    </p>
                    @endif

                    </div>
                </body>
            </html>
    </div>
</div>

<script>
    window.onload = function(){

    }
</script>
