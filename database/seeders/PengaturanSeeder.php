<?php

namespace Database\Seeders;

use App\Models\PengaturanStruk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PengaturanStruk::create([
            'alamat' => 'nama_usaha',
            'no_telp' => 1,
            'email' => 1,
            'catatan' => 1,
            'logo_gambar' => 0,
        ]);

       
    }
}
