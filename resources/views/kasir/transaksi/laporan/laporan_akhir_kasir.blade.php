<!DOCTYPE html>
<html>
<head>
	<title>Tutup Kasir - Nama Kasir</title>
</head>

<style>
    *{
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

    .container{
        width: 86%;
        margin: 30px auto;
    }
    .header_1{
        display: flex;
        align-items: top;
        justify-content: space-between;
        padding-bottom: 12px;
        border-bottom: 1.4px solid #44444440;
    }
    p{
        font-size: 14px;
    }
    .mb-2{
        margin-bottom: 14px;
    }
    table {
      margin-top: 20px;
      border: 1px solid #ddd;
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      border-right: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .total {
      font-weight: bold;
    }
    .headingText{
        color: #444;
    }
    .text-danger{
        color: red;
    }
    .catatan-report{
        margin-top: 40px;
    }
    .text-right{
        text-align: right;
    }
    .text-center{
        text-align: center;
    }
	.mb-4{
		margin-bottom: 24px;
	}
</style>

<body>
	
    <div class="page">
        <header class="page-header">
            <div class="container">
                <nav class="header_1">
					<h2 class="mb-4">Laporan Kasir</h2>
                    {{-- <div class="logo"><img src="kasir-assets/img/logo.png" alt="logo" width="30%"></div> --}}
                    <div class="header_detail">
                        <p class="cashier_name mb-2">Kasir : {{ $kasir->user->nama_user }}</p>
                        <p class="open_kas mb-2">Buka Kasir : {{ $kasir->waktu_masuk }}</p>
                        <p class="close_kas mb-2">Tutup Kasir : {{ $kasir->waktu_keluar }}</p>
                    </div>
                </nav>
            </div>
        </header>

        <main class="page-content">
            <div class="container">
                <h4 class="headingText">Ringkasan <span class="text-danger">*</span></h4>

                <table>
                    <thead>
                      <tr>
                        <th class="text-center">No.</th>
                        <th>Kas Awal</th>
                        <th>Kas Akhir</th>
                        <th>Total Penjualan</th>
                        <th>Pemasukan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1.</td>
                        <td class="text-right">Rp. {{formatRupiah( $kas_awal ) }}</td>
                        <td class="text-right">Rp. {{formatRupiah( $sisa_kas ) }}</td>
                        <td class="text-center">{{ $total_transaksi }}</td>
                        <td class="text-right">Rp. {{ formatRupiah($jumlah_pendapatan) }}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="4" class="total">Total Akhir :</td>
                        <td class="total text-right">Rp. {{ formatRupiah($jumlah_pendapatan+$sisa_kas) }}</td>
                      </tr>
                    </tfoot>
                  </table>

                  <div class="catatan-report">
                    <h4 class="headingText">Catatan <span class="text-danger">*</span></h4>
                    <table>
                        <thead>
                          <tr>
                            <th class="text-center">Pembayaran Cash</th>
                            <th class="text-center">Pembayaran Debit</th>
                            <th class="text-center">Pembayaran E-Wallet</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-right">Rp.{{ formatRupiah($byMetodePembayaran['cash']) }}</td>
                            <td class="text-right">Rp.{{ formatRupiah($byMetodePembayaran['debit']) }}</td>
                            <td class="text-right">Rp.{{ formatRupiah($byMetodePembayaran['ewalet']) }}</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
        </main>
    </div>

</body>
</html>
