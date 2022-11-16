<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word($nbWords = 1, $variableNbWords = true),
            'category' => $this->faker->word($nbWords = 1, $variableNbWords = true),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'price' => $this->faker->numberBetween($min = 100000, $max = 9999999),
            'stock' => $this->faker->numberBetween($min = 1, $max = 10),
            'sold' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
