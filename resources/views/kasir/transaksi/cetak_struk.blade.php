@php
    $pengaturan = App\Models\PengaturanStruk::first();
@endphp
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Struk' }}</title>
        <style>
            
            .center{
                text-align: center;
            }
            .struk {
                width: 90%;
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
            .logo img{
                width: 50%;
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
            <div class="logo"><img src="kasir-assets/img/logo.png" alt=""> </div>
            <div class="kontak mt-3">
                <div class="mb-2">{{ $pengaturan->alamat }}</div>
                <div class="mb-2">
                    Telp: {{ $pengaturan->no_telp }}
                </div>
                <div>
                    Email : {{ $pengaturan->email }}
                </div>
            </div>
            <span>--------------------------------------------------------------------------------------------------------------------------</span>
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
                    <!-- take away -->
                    {{ strtoupper(str_replace('_',' ',$transaksi->type_order)) }}
                </div>
                <div>
                    <b>Pelanggan:
                    </b>
                    {{ $transaksi->pelanggan->nama ?? 'Tidak Ada Nama' }}
                </div>
            </div>
            <span>--------------------------------------------------------------------------------------------------------------------------</span>
            <table width="100%">
                @foreach ($transaksi->detailTransaksi as $item)
                <tr>
                    <td>{{ $item->produk->nama_produk }} 
                      @if ($item->varian()->exists())
                      <table>
                        <tr>
                            <th>Varian:</th>
                            @foreach ($item->varian()->get() as $itemVarian)
                                <th>{{$itemVarian->nama_varian}} - Rp.{{ formatRupiah($itemVarian->harga) }}</th>
                            @endforeach
                        </tr>
                       </table>
                      @endif
                    </td>
                    <th>Rp. {{ formatRupiah($item->harga) }} x {{ $item->jumlah }}</th>
                    <th>Rp. {{ formatRupiah($item->varian()->sum('harga') + $item->harga) }}</th>
                </tr>
                
                @endforeach
            </table>
            <span>--------------------------------------------------------------------------------------------------------------------------</span>
            <div style="float:left;">
                @empty($transaksi->reward_pembelian != [])
                @php
                    $poin = 0;
                @endphp
                <div><b>Reward:</b></div>
                    @foreach (json_decode($transaksi->reward_pembelian,true) as $item)
                        {{ $loop->iteration }}. {{ $item['nama_point_reward']}} &nbsp;+{{$item['jumlah_poin']}} Poin
                        @php
                            $poin += $item['jumlah_poin']
                        @endphp
                        <br>
                    @endforeach
                @endif
            </div>
            <div class="clearfix"></div>
            <div class="right">
                @if ($transaksi->potongan)
                <div>
                   <b> Subtotal:</b> &nbsp;&nbsp;  Rp. {{ formatRupiah((int)$transaksi->jumlah) }}
                </div>
                
                <div>
                   <b> Potongan:</b> &nbsp;&nbsp;  Rp. {{ formatRupiah($transaksi->potongan) }}
                </div>

                <div>
                   <b> Subtotal Sblm Potongan:</b> &nbsp;&nbsp;  Rp. {{ formatRupiah($transaksi->jumlah_sebelum_potongan ?? 0) }}
                </div>
                @else
                    <b>Subtotal:</b> &nbsp;&nbsp;  Rp. {{ formatRupiah((int)$transaksi->jumlah) }}
                @endif
               
                <div>
                    <b>Pajak:</b> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Rp.{{ formatRupiah($transaksi->total_pajak) }}
                </div>
                <div>
                    <b>Poin Yang Di dapatkan:</b> {{ $poin ?? 0 }}
                </div>
            </div>
           
            <div class="clearfix"></div>
            <span>--------------------------------------------------------------------------------------------------------------------------</span>
                <div class="subtotal">Subtotal: Rp. {{ formatRupiah($transaksi->jumlah + ($transaksi->total_pajak ?? 0)) }}</div>
            <span>--------------------------------------------------------------------------------------------------------------------------</span>

           @if (!empty($pengaturan->catatan))
           <p class="center">
           {{$pengaturan->catatan}}
        </p>
           @endif

        </div>
    </body>
</html>