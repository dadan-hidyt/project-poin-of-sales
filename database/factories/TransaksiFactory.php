<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'id_transaksi' => fake()->uuid(),
            'tanggal_order' => now(),
            'id_pelanggan' => 1,
            'id_metode_pembayaran' => 1,
            'catatan' => 'lorem',
            'jumlah' => 2,
            'id_kasir' => 'UUD',
            'status_pembayaran' => "DIBAYAR",
            'total_biaya' => 2000000,
        ];
    }
}
