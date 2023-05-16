<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Pajak</title>
	<style>
		hr{
			border:1px dashed #dedede;
		}
	</style>
</head>
<body>
	<hr>
		<h1 style="text-align: center;">Laporan Pajak</h1>
	<hr>
	<div>
		@php
			$total_pajak = 0;
		@endphp
		@foreach ($data as $item)
		@php
			$total_pajak += $item->total_pajak;
		@endphp
		<hr>
			<div>
				<div>
					<b>Kode Transaksi: </b><span>{{ $item->kode_transaksi }}</span>
				</div>
				<div>
					<b>Pelanggan: </b><span>{{ $item->pelanggan->nama ?? 'Tamu' }}</span>
				</div>
				<div>
					<b>Total Pajak: </b><span>Rp. {{ formatRupiah($item->total_pajak) }}</span>
				</div>
			</div>
			<hr>
		@endforeach
		<h4>Total Pajak:Rp.{{ formatRupiah($total_pajak) }}</h4>
	</div>
</body>
</html>