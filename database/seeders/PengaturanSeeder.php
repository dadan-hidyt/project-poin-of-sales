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
            'group_name' => "GROUP1",
            'alamat' => 1,
            'no_telp' => 1,
            'email' => 1,
            'catatan' => "Terimakasih telah belanaja di toko kami!",
        ]);
    }
}
