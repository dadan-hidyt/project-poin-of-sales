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
            'key' => 'nama_usaha',
            'nama' => "Nama Usaha",
            'value' => "Saung Teko Sumedang",
            'active' => 'Y',
        ]);

        PengaturanStruk::create([
            'key' => 'logo',
            'nama' => "Logo",
            'value' => "dada.jpg",
            'active' => 'Y',
        ]);

        PengaturanStruk::create([
            'key' => 'alamat',
            'nama' => "Alamat",
            'value' => "Jl. Medan Merdeka",
            'active' => 'Y',
        ]);

        PengaturanStruk::create([
            'key' => 'no_telpon',
            'nama' => "No Telpon",
            'value' => "088223837164",
            'active' => 'Y',
        ]);
    }
}
