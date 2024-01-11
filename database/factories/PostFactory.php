<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'category_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'slug' => $this->faker->slug(),
            'likes' => $this->faker->numberBetween(0, 200),
            'body' => $this->faker->sentence(32),
        ];
    }
}
