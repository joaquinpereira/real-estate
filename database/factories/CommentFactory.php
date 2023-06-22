<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
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
        return [
            'user_id' => function(){
                return User::factory()->create();
            },
            'post_id' => function(){
                return Post::factory()->create();
            },
            'parent_id' => function(){
                if(fake()->boolean()){
                    return Comment::factory()->create();
                }
                return null;
            },
            'content'=> fake()->sentence(6 , true),
            'published'=> fake()->boolean(),
        ];
    }
}