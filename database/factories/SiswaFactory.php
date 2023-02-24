<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state. 
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kelas_id' => mt_rand(1,4),
            'nis' => fake()->numerify('#######'),
            'tanggal_lahir' => fake()->dateTimeBetween($startDate = '-18 years', $endDate = '-16 years',),
            'nama' => fake()->name(),
            'alamat' => fake()->address()
        ];
    }
}
