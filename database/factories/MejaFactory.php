<?php

namespace Database\Factories;

use App\Models\Meja;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meja>
 */
class MejaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $da = [true,false];
        shuffle($da);
        return [
            'nomor_meja' => "MJ-".fake()->randomDigit(),
            'nama' => fake()->name(),
            'kapasitas' => rand(0,10),
            'tersedia' => $da[0],
        ];
    }
}
