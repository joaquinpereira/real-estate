<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = ['Internet', 'Wifi', 'Air Conditioning', 'Swiming Pool', 'Central Heating', 'Spa & Massage', 'Gym', 'Alarm', 'Car Parking'];
        foreach($features as $feature){
            Feature::factory()->create(['name' => $feature]);
        }
    }
}
