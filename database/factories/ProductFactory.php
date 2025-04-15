<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return [
        'title' => fake()->unique()->randomElement(['Air Freshner', 'Bleach', 'Bovril', 'Coffee', 'Milk', 'Sugar', 'Multivitamin', 'Shampoo', 'Petrol', 'Plex', 'Youtube Premium']),
        'notes' => '',
        'price' => fake()->randomFloat(0, 50, 1000),
        'shop' => fake()->randomElement(['Checkers', 'Dischem', 'Other']),
        'category' => fake()->randomElement(['Groceries', 'Medicine', 'Transport', 'Entertainment']),
        'link' => '',
        'status' => fake()->randomElement([1, 0]),
        'user_id' => 1,
    ];
    }
}
