<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaBar' => $this->faker->word($nbWords = 1, $variableNbWords = true),
            'harga' => $this->faker->numberBetween($min = 100000, $max = 9999999),
            'stok' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
