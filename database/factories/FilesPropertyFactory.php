<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FilesProperty>
 */
class FilesPropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id' => function(){
                return Property::factory()->create();
            },
            'type' => fake()->mimeType(),
            'url' => fake()->url(),
            'description' => fake()->sentence(20 , true),
        ];
    }
}
