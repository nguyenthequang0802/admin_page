<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_category = Category::count();
        $random_number = fake()->randomNumber(1);
        if ($num_category > 0 && $random_number < 3){
            return [
                'category_name' => fake()->name(),
                'category_parent_id' => Category::all()->random()->id,
                'category_slug' => fake()->slug(),
            ];
        } else{
            return [
                'category_name' => fake()->name(),
                'category_parent_id' => 0,
                'category_slug' => fake()->slug(),
            ];
        }
    }
}
