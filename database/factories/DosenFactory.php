<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(), // Nama acak
            'nidn' => $this->faker->unique()->numerify('##########'), // NIDN 10 angka unik
            'jenis_kelamin' => $this->faker->randomElement(['P', 'L']), // Jenis kelamin acak
            'alamat' => $this->faker->address(),
        ];
    }
}
