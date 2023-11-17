<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::all()->random()->id,
            'name' => fake()->name(),
            'preview_image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'content' => fake()->text(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
