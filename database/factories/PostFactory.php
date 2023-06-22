<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
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
            'user_id' => function(){
                return User::factory()->create();
            },
            'category_id' => function(){
                return Category::factory()->create();
            },
            'title' => fake()->sentence(6, true),
            'slug' => fake()->slug(),
            'summary' => fake()->sentence(15, true),
            'content' => fake()->paragraph(30, true),
            'poster' => 'https://picsum.photos/1080/768?random=1',
            'published_at' => function(){
                if(fake()->boolean())
                    return Carbon::now()->subDays($this->faker->numberBetween($min = 1, $max = 200));
                return null;
            },
        ];
    }
}
