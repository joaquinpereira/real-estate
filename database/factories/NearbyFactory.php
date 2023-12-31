<?php

namespace Database\Factories;

use App\Models\NearbyType;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nearby>
 */
class NearbyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->word(),
            'location'=> fake()->word(),
        ];
    }
}
