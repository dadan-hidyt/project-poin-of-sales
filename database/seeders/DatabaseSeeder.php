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
        // \App\Models\User::factory(10)->create();
        $this->call(KariawanSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(KategoriProdukSeeder::class);
        $this->call(VarianProdukSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TransaksiSeeder::class);
        $this->call(DetailTransaksiSeeder::class);
        $this->call(PengaturanSeeder::class);
        $this->call(SatuanBarang::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
