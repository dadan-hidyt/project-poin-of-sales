<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Pajak {{ $data->kode_transaksi }}</title>
</head>
<body>
	<hr>
		<h1 style="text-align: center;">Laporan Pajak Per Transaksi</h1>
	<hr>
	<div>
		<div>
           <b>Kode Transaksi: {{ $data->kode_transaksi ?? '-' }}</b>
		</div>
		<div>
           <b>Pelanggan: {{ $data->pelanggan->nama ?? '-' }}</b>
		</div>
		<div>
			<b>Total Pajak: Rp. {{ formatRupiah($data->total_pajak) }}</b>
		</div>
	</div>
</body>
</html>