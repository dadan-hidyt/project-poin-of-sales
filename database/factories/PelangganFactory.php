<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use fake;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Pelanggan::class;
    public function definition(): array
    {
        $jk = ['L','P'];
        shuffle($jk);
        return [
            'kode_pelanggan' => strtoupper(Str::uuid()),
            'nama' => fake()->name(),
            'email' => fake()->email(),
            'no_hp' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'kota' => fake()->city(),
            'jenis_kelamin' => $jk[0],
            'poin' => mt_rand(),

        ];
    }
}
