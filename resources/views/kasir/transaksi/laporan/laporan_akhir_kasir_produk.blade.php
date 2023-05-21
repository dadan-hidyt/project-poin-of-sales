<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 12pt;
			margin: 0;
			padding: 0;
		}
		h1, h2, h3 {
			font-weight: bold;
			margin: 0;
			padding: 0;
		}
		h1 {
			font-size: 24pt;
			margin-top: 20px;
			margin-bottom: 10px;
		}
		h2 {
			font-size: 18pt;
			margin-top: 15px;
			margin-bottom: 10px;
		}
		h3 {
			font-size: 14pt;
			margin-top: 10px;
			margin-bottom: 5px;
		}
		p, ul {
			margin: 0;
			padding: 0;
			line-height: 1.5;
		}
		ul li {
			list-style-type: none;
			padding-left: 0;
			margin-left: 0;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		th, td {
			border: 1px solid #000;
			padding: 5px;
			text-align: left;
		}
		th {
			background-color: #ccc;
		}
		.page {
			page-break-after: always;
		}
	</style>
</head>
<body>
	<div class="page">
		<h1>Laporan Tutup Kasir</h1>
        <br>
		<div>Nama: {{ $kasir->user->nama_user }}</div>
		<div>Waktu Buka: {{ $kasir->waktu_masuk }}</div>
		<div>Waktu Tutup: {{ $kasir->waktu_keluar }}</div>
        <h1>Ringkasan</h1>
		<ul>
			<li>Total Transaksi: {{ $total_transaksi }}</li>
			<li>Total Pendapatan: Rp. {{ formatRupiah($jumlah_pendapatan) }},-</li>
			<li>Kas Awal: Rp. {{formatRupiah( $kas_awal ) }},-</li>
			<li>Sisa Kas: Rp. {{formatRupiah( $sisa_kas ) }},-</li>
		</ul>
		<h1>By Metode Pembayaran</h1>
		<ul>
			<li>Cash:Rp.{{ formatRupiah($byMetodePembayaran['cash']) }}</li>
			<li>Transfer/Debit:Rp.{{ formatRupiah($byMetodePembayaran['debit']) }}</li>
			<li>E-Wallet:Rp.{{ formatRupiah($byMetodePembayaran['ewalet']) }}</li>
		
		</ul>
        <h4>Jumlah Akhir: Rp. {{ formatRupiah($jumlah_pendapatan+$sisa_kas) }},-</h4>

		<h2>Detail Transaksi</h2>
		<table>
			<thead>
				<tr>
					<th>Kode Transaksi</th>
					<th>Nama Produk</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($transaksi as $item)
					<tr>
						<td>{{ $item->kode_transaksi }}</td>
						<td>
							@foreach ($item->detailTransaksi as $item2)
								{{ $item2->produk->nama_produk }}[{{ $item2->jumlah }}] ,
							@endforeach
						</td>
						<td>Rp.{{ formatRupiah($item->jumlah) }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</body>
</html>
