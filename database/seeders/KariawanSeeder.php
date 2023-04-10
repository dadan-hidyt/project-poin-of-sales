<?php

namespace Database\Seeders;

use App\Models\Kariawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KariawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kariawan::factory(599)->create();
    }
}
