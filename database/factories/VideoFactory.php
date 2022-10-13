<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'title' => fake()->sentence(4),
          'description' => fake()->paragraph(5),
          'url_img' => "https://source.unsplash.com/random/640x480/cars",
          'nationality' => fake()->country(),
          'actor' => fake()->name(),
          'year_created'=>fake()->year(),
          'created_at' => now()
        ];
    }
}
