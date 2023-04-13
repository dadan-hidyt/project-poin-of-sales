<?php

namespace Database\Seeders;

use App\Models\SatuanBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SatuanBarang::create([
            'nama_satuan' => 'KG',
        ]);
        SatuanBarang::create([
            'nama_satuan' => 'Unit',
        ]);
        SatuanBarang::create([
            'nama_satuan' => 'Gram',
        ]);
        SatuanBarang::create([
            'nama_satuan' => 'Ons',
        ]);
    }
}
