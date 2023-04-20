<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VarianProduk>
 */
class VarianProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_varian' => 'MANTAF',
            'id_produk' => Product::all()->random()->id,
            'stok' => 10,
            'harga' => fake('id-ID')->randomDigit(),
        ];
    }
}
