<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "songName" => fake()->word,
            "durationLength" => fake()->numberBetween(30,300),
            "genreId" => fake()->numberBetween(1,1000),
            "artist_name" => fake()->name
        ];
    }
}
