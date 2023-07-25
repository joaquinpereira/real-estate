<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use joaquinpereira\Pexels\Facades\Pexels;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory(10)->create();
        Category::factory(10)->create();

        $this->createPosts();
    }

    public function createPosts()
    {
        $posters = Pexels::image_search('house, living room, bed room', 1, 50, 'landscape')['photos'];
        for($i=0; $i<30; $i++){
            $this->createNewPost(rand(1, 11), $posters[$i]);
        }

        for($i=0; $i<10; $i++){
            $this->createNewPost(1, $posters[$i+30]);
        }
    }

    public function createNewPost($user_id, $poster=null)
    {
        Post::factory()->create([
            'user_id' => $user_id,
            'category_id' => random_int(1, 10),
            'poster' => $poster->sizes->landscape,
        ])->each(function($post){
            $tags = array();
            for($i=0; $i <rand(2,4); $i++)
            {
                $tags[] = rand(1,10);
            }
            $post->tags()->sync($tags);
        });
    }
}
