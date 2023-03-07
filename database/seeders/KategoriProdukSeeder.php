<?php

namespace Database\Seeders;
use App\Models\KategoriProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriProduk::factory(1)->create();
    }
}
