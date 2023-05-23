<?php

namespace Database\Seeders;

use App\Models\PengaturanPoinReward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanPointReward extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PengaturanPoinReward::create(['potongan_per_10_poin'=>1000]);
    }
}
