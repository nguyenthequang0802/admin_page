<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_comment = Comment::count();
        $random_number = fake()->randomNumber(1);
        if ($num_comment > 0 && $random_number < 3){
            return [
                'parent_id' => Comment::all()->random()->id,
                'content' => fake()->text(),
                'review_id' => Review::all()->random()->id,
                'user_id' => User::all()->random()->id,
            ];
        } else{
            return [
                'parent_id' => 0,
                'content' => fake()->text(),
                'review_id' => Review::all()->random()->id,
                'user_id' => User::all()->random()->id,
            ];
        }
    }
}
