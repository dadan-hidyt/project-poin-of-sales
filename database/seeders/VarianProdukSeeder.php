<?php

namespace Database\Seeders;

use App\Models\VarianProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VarianProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VarianProduk::factory(1)->create();
    }
}
