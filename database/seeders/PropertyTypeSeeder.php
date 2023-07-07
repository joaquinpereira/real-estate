<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Residential', 'Commercial', 'Land', 'Luxury'];
        foreach($types as $type){
            PropertyType::factory()->create(['name' => $type]);
        }
    }
}
