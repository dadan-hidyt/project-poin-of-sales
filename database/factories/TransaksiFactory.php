<?php

namespace Database\Factories;

use App\Models\Kariawan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_transaksi' => Str::upper(uniqid('TR')),
            'tanggal_order' => now(),
            'id_pelanggan' => 1,
            'id_metode_pembayaran' => 1,
            'catatan' => 'lorem',
            'jumlah' => 2,
            'id_kasir' => Kariawan::all()->random()->id,
            'status_pembayaran' => "DIBAYAR",
            'total_biaya' => 2000000,
        ];
    }
}
