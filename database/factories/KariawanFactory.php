<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kariawan>
 */
class KariawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => fake()->nik,
            'nama' => fake()->name(),
            'no_telp' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'avatar' => fake()->imageUrl(),
        ];
    }
}
