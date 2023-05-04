@php
    $pengaturan = App\Models\PengaturanStruk::first();
@endphp
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
                @if ($pengaturan->alamat == 1)
                <div>Jl. Medan merdeka no2</div>
                @endif
                @if ($pengaturan->no_telp == 1)
                <div>
                    Telp:088223837165
                </div>
                @endif
                @if ($pengaturan->email == 1)
                <div>
                    Telp:dadanhidyt@gmail.com
                </div>
                @endif
            </div>
            <span>-----------------------------------------------------------------------------------</span>
            <div class="nota">
                <div>
                    <b>Kode Transaksi :</b>#{{ $transaksi->kode_transaksi }}</div>
                <div>
                    <b>Kasir:</b> {{ $transaksi->kasir->user->nama_user ?? "No Kasir" }} </div>
                <div>
                    <b>Time:</b>
                    {{ $transaksi->tanggal_order }}    
                </div>
               @if ($transaksi->id_meja)
                <div>
                    <b>Meja:</b>
                    {{ $transaksi->meja->nama_meja }}
                    </div>
                    @else
                    <b><del>Meja:</del></b>
                    Dibawa Pulang
               @endif
                <div>
                    <b>Type:</b>
                    {{ $transaksi->type_order }}
                </div>
                <div>
                    <b>Pelanggan:
                    </b>
                    {{ $transaksi->pelanggan->nama ?? 'No Name' }}
                </div>
            </div>
            <span>-----------------------------------------------------------------------------------</span>
            <table width="100%">
                @foreach ($transaksi->detailTransaksi as $item)
                <tr>
                    <td>{{ $item->produk->nama_produk }}</td>
                    <th>Rp. {{ formatRupiah($item->harga) }} x {{ $item->jumlah }}</th>
                </tr>
                
                @endforeach
            </table>
            <span>-----------------------------------------------------------------------------------</span>

            <div class="right">
                <div>
                    Subtotal &nbsp;&nbsp; : &nbsp;&nbsp; Rp. {{ formatRupiah($transaksi->jumlah) }}

                </div>
                <div>
                    Pajak &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; {{ formatRupiah($transaksi->total_pajak) }}
                </div>
            </div>
            <div class="clearfix"></div>
            <span>-----------------------------------------------------------------------------------</span>
                <div class="subtotal">Subtotal: Rp. {{ formatRupiah($transaksi->jumlah + ($transaksi->total_pajak ?? 0)) }}</div>
            <span>-----------------------------------------------------------------------------------</span>

           @if (!empty($pengaturan->catatan))
           <p class="center">
           {{$pengaturan->catatan}}
        </p>
           @endif

        </div>
    </body>
</html>