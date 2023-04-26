<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SatuanBarang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KariawanSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(KategoriProdukSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PengaturanSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VarianProdukSeeder::class);
        $this->call(SatuanBarang::class);
    }
}
