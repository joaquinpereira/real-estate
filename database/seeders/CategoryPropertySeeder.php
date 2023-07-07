<?php

namespace Database\Seeders;

use App\Models\CategoryProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Aparment', 'Villa', 'Family House', 'Modern Villa', 'Town House', 'Oficce'];
        foreach($categories as $category){
            CategoryProperty::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
    }
}
