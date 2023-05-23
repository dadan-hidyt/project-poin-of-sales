<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PengaturanPoinReward;
use App\Models\SatuanBarang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PengaturanPointReward::class);
        $this->call(KariawanSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(MejaSeeder::class);
        $this->call(KategoriProdukSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PengaturanSeeder::class);
        $this->call(SatuanBarang::class);
        $this->call(ProductSeeder::class);
        $this->call(VarianProdukSeeder::class);
    }
}
