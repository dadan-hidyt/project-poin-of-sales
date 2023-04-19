<?php

namespace Database\Seeders;

use App\Models\Meja;
use Database\Factories\MejaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meja::factory(10)->make();
    }
}
