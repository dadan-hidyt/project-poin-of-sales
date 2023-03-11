<?php

namespace Database\Factories;

use App\Models\KategoriProduk;
use App\Models\VarianProduk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_produk' => Str::snake(uniqid('P-')),
            'nama_produk' => fake()->userName(),
            'harga_beli' => fake()->randomNumber(6),
            'harga_jual' =>  fake()->randomNumber(6),
            'harga_modal' =>  fake()->randomNumber(6),
            'id_kategori_produk' => KategoriProduk::all()->random()->id,
            'id_varian' => VarianProduk::all()->random()->id,
            'satuan' => 'Item',
            'stok' => rand(),
        ];
    }
}
