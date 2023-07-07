<?php

namespace Database\Factories;

use App\Models\CategoryProperty;
use App\Models\City;
use App\Models\PropertyStatus;
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
            'user_id' => User::factory(),
            'category_id' => CategoryProperty::factory(),
            'city_id' => City::factory(),
            'property_type_id' => PropertyType::factory(),
            'property_status_id' => PropertyStatus::factory(),
            'title' => fake()->sentence(6, true),
            'slug' => fake()->slug(),
            'poster' => 'https://picsum.photos/1080/768?random=1',
            'address' => fake()->sentence(15, true),
            'description' => fake()->paragraph(30, true),
            'featured_Property' => fake()->boolean(),
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
