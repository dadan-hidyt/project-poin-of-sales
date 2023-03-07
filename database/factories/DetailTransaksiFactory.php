<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class DetailTransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_detail_transaksi' => fake()->uuid(),
            'id_transaksi' => Transaksi::all()->random()->id_transaksi,
            'kode_produk' => Product::all()->random()->kode_produk,
            'jumlah' => 4,
            'harga' => 20000,
            'subtotal' => '2',
            'persentase_pajak' => '3%',
            'total_pajak' => (0.03 * 20000),
            'total' => 10000, 
        ];
    }
}
