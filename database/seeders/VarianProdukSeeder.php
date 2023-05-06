<?php

namespace Database\Seeders;

use App\Models\VarianProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//seder varuian produk
class VarianProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VarianProduk::factory(2)->create();
    }
}
