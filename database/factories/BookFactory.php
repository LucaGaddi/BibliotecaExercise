<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titolo' => fake()->sentence(3),
            'autore' => fake()->name(),
            'anno' => fake()->year(),
            'genere' => fake()->word(),
            'descrizione' => fake()->paragraph(),
        ];
    }
}

