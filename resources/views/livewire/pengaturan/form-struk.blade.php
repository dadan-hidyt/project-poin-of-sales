
<div class="row">
    <div class="col-md-4">
        
<div class="for">
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
</div>

    </div>
    <div class="col-md-8 border rounded">
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
                width: 500px;
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
                font-size: large;
                margin: 10px 0;
            }
            .nota {
                width: 98%;
                margin: auto;
            }
            .right {
                float: right;
                margin: 5px 10px;
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
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <div class="struk clearfix">
            <div class="logo">SAUNG TEKO SUMEDANG</div>
            <div class="kontak">
                @if ($this->strukModel->alamat == 1)
                <div>Jl. Medan merdeka no2</div>
                @endif
                @if ($this->strukModel->no_telp == 1)
                <div>
                    Telp:088223837165
                </div>
                @endif
                @if ($this->strukModel->email == 1)
                <div>
                    Telp:dadanhidyt@gmail.com
                </div>
                @endif
            </div>
            <span>---------------------------------------------------------------------</span>
            <div class="nota">
                <div>
                    <b>Nota No:</b>
                    D78234da</div>
                <div>
                    <b>Kasir:</b>
                    Budiana Irmawansyah</div>
                <div>
                    <b>Time:</b>
                    {{ now() }}    
                </div>
                <div>
                    <b>Meja:</b>
                    A01</div>
                <div>
                    <b>Type:</b>
                    Dry In</div>
                <div>
                    <b>Pelanggan:
                    </b>
                    [P0023] Indra
                </div>
            </div>
            <span>---------------------------------------------------------------------</span>
            <table width="100%">
                <tr>
                    <td>Nasi Liwet 1 Porsi</td>
                    <th>Rp. 57.000</th>
                </tr>
                <tr>
                    <td>Ayam bawang penyet 1 Porsi</td>
                    <th>Rp. 57.000</th>
                </tr>
                <tr>
                    <td>Ikan Kepala Naga</td>
                    <th>Rp. 57.000</th>
                </tr>
            </table>
            <span>---------------------------------------------------------------------</span>

            <div class="right">
                <div>
                    Subtotal &nbsp;&nbsp; : &nbsp;&nbsp; 28.0000

                </div>
                <div>
                    Pajak &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 28.0000
                </div>
            </div>
            <div class="clearfix"></div>
            <span>---------------------------------------------------------------------</span>
                <div class="subtotal">Subtotal: Rp. 230.0000</div>
            <span>---------------------------------------------------------------------</span>

           @if (!empty($this->strukModel->catatan))
           <p class="center">
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
