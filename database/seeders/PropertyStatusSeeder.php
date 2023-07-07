<?php

namespace Database\Seeders;

use App\Models\PropertyStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyStatus::factory()->create(['name' => 'For Sale']);
        PropertyStatus::factory()->create(['name' => 'For Rent']);
    }
}
