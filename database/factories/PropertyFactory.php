<?php

namespace Database\Factories;

use App\Models\CategoryProperty;
use App\Models\City;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'user_id' => function(){
                return User::factory()->create();
            },
            'category_id' => function(){
                return CategoryProperty::factory()->create();
            },
            'city_id' => function(){
                return City::factory()->create();
            },
            'property_type_id' => function(){
                return PropertyType::factory()->create();
            },
            'property_statuses_id' => function(){
                return City::factory()->create();
            },
            'title' => fake()->sentence(6, true),
            'slug' => fake()->slug(),
            'address' => fake()->sentence(15, true),
            'description' => fake()->paragraph(30, true),
            'property_size' => fake()->numberBetween($min = 40, $max = 4500) . ' km2',
            'price' => fake()->numberBetween(1500, 350000),
            'status' => fake()->randomElement(['Pending', 'Pause', 'Active', 'Closed']),
            'bedrooms' => fake()->numberBetween(1, 15),
            'bathrooms' => fake()->numberBetween(1, 15),
            'year_built' => fake()->numberBetween(1950, 2023),
            'garage' => fake()->numberBetween(1, 4),
            'garage_size' => fake()->numberBetween($min = 40, $max = 1000) . ' km2',
        ];
    }
}
