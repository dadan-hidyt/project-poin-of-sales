<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan kasir</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
            color: #333;
            background-color: transparent;
            }

            th,
            td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }

            th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            }

            tr:hover {
            background-color: #f5f5f5;
            }

            tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
            }

            tbody tr:last-of-type {
            border-bottom: 2px solid #007bff;
            }

            @media (max-width: 575px) {
            th,
            td {
                padding: 0.25rem;
                font-size: 0.8rem;
            }
            }
            header{
                color: white;
                padding: 0.5px;
                text-align: center;
                margin-bottom: 10px;
                background: #007bff;
            }

    </style>
</head>
<body>
    <header>
        <h1>Laporan kasir</h1>
    </header>
    <div class="info">
        <div><b>Nama: </b>{{ $kasir->user->nama_user }}</div>
        <div><b>Tanggal Masuk:</b> {{ $kasir->waktu_masuk }}</div>
        <div><b>Waktu Keluar: </b>{!! $kasir->waktu_keluar ?? '<i>Belum Keluar</i>' !!}</div>
        <div><b>Kas Awal:</b> Rp. {{ $kasir->kas_awal }} - Sisa Kas: Rp. {{ $kasir->sisa_kas ?? 0 }}</div>
        <div><b>Uang Keseluruhan:</b> {{ $kasir->total_keseluruhan }}</div>
        <div><b>Total Transaksi:</b> {{ $kasir->transaksi->count(); }}</div>
    </div>
    <hr style="border:1px dashed #dedede;margin:10px 0px">
    <div class="detail-transaksi">
        <table border="1" width='100%'>
            <thead>
                <th>#</th>
                <th>Meja</th>
                <th>Total</th>
                <th>Tgl</th>
            </thead>
            <tbody>
                @foreach ($kasir->transaksi as $items)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $items->meja->nama_meja ?? "FREE TABLE" }}</td>
                        <td>Rp. {{ formatRupiah($items->jumlah) }}</td>
                        <td>{{ $items->tanggal_order }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>