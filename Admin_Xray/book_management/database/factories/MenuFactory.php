<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_menu = Menu::count();
        $random_number = fake()->randomNumber(1);
        if ($num_menu > 0 && $random_number < 3) {
            return [
                'menu_name' => fake()->name(),
                'menu_parent_id' => Menu::all()->random()->id,
                'menu_url' => fake()->url(),
            ];
        } else {
            return [
                'menu_name' => fake()->name(),
                'menu_parent_id' => 0,
                'menu_url' => fake()->url(),
            ];
        }
    }
}
