<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 100%;
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0px;
        }

        .card h2 {
            text-align: center;
        }

        .card-content {
            margin-top: 20px;
        }

        .card-content p {
            margin: 5px 0;
        }

        .total-list {
            margin-top: 20px;
            list-style-type: none;
            padding: 0;
        }

        .total-list li {
            margin-bottom: 5px;
        }

        .footer {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Penjualan Per Metode Pembayaran</h2>
        <div class="card-content">
            <p><strong>Cash:</strong> Rp. {{ formatRupiah($byMetode['cash']) }}</p>
            <p><strong>Debit:</strong> Rp. {{ formatRupiah($byMetode['debit']) }}</p>
            <p><strong>E-Wallet:</strong> Rp. {{ formatRupiah($byMetode['ewalet']) }}</p>
        </div>
    </div>

    <!-- Tambahkan card lainnya sesuai dengan data penjualan per transaksi -->

    <div class="card">
        <h2>Laporan Penjualan Lainya</h2>
        <ul class="total-list">
            <li><strong>Jumlah Transaksi:</strong> {{$total_transaksi}}</li>
            <li><strong>Jumlah Semua Transaksi:</strong> Rp.{{ formatRupiah($peng) }}</li>
        </ul>
    </div>
</body>
</html>
