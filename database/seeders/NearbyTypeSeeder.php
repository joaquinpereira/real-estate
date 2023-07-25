<?php

namespace Database\Seeders;

use App\Models\NearbyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NearbyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nearby_types = [
            ['Education', '<span><i class="fa fa-building" aria-hidden="true"></i></span>'],
            ['Health & Medical', '<span><i class="fa fa-ambulance"></i></span>'],
            ['Government institutions', '<span><i class="fa fa-university" aria-hidden="true"></i></span>'],
            ['Stores and markets', '<span><i class="fa fa-cart-plus" aria-hidden="true"></i></span>'],
            ['Cultural and recreational sites', '<span><i class="fa fa-futbol-o" aria-hidden="true"></i></i></span>']
        ];

        foreach($nearby_types as $type){
            NearbyType::factory()->create(['name' => $type[0], 'tag_title' => $type[1]]);
        }
    }
}




