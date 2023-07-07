<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\CategoryProperty;
use App\Models\City;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Feature;
use App\Models\FilesProperty;
use App\Models\Nearby;
use App\Models\Post;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $user = User::factory(1)->create([
            'name' => 'Joaquin Pereira',
            'email' => 'pereira.joaquin@gmail.com',
        ])->first();

        Tag::factory(10)->create();
        Category::factory(10)->create();

        $this->createPosts($user);

        $this->call(CategoryPropertySeeder::class);
        City::factory(20)->create();
        $this->call(PropertyTypeSeeder::class);
        $this->call(PropertyStatusSeeder::class);
        $this->call(FeatureSeeder::class);

        $this->createProperties($user);
    }

    public function createProperties($user)
    {
        for($i=0; $i<30; $i++){
            $this->createNewProperty(rand(1, 10));
        }

        for($i=0; $i<10; $i++){
            $this->createNewProperty($user->id);
        }
    }

    public function createPosts($user)
    {
        for($i=0; $i<30; $i++){
            $this->createNewPost(rand(1, 10));
        }

        for($i=0; $i<10; $i++){
            $this->createNewPost($user->id);
        }
    }

    public function createNewPost($user_id)
    {
        Post::factory()->create([
                'user_id' => $user_id,
                'category_id' => random_int(1, 10),
            ])
            ->each(function($post){
                $tags = random_int(1, 4);
                $post->tags()->attach($tags);
        });
    }

    public function createNewProperty($user_id)
    {
        Property::factory(1)->create([
            'user_id' => $user_id,
            'category_id' => rand(1, 6),
            'city_id' => rand(1, 10),
            'property_type_id' => rand(1, 4),
            'property_status_id' => rand(1, 2),
        ])->each(function($property) use ($user_id){
            $n = rand(1,3); $features = array();
            for($i=0; $i < $n; $i++){
                $features[] = rand(1, 9);
            }
            $property->features()->sync($features);

            Nearby::factory(4)->create([
                'property_id' => $property->id
            ]);

            FilesProperty::factory(2)->create([
                'property_id' => $property->id
            ]);

            Favorite::factory()->create([
                'user_id' => $user_id,
                'property_id' => $property->id
            ]);
        });
    }

}
