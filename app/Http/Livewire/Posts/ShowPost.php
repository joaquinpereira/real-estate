<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use App\Traits\PostTrait;

class ShowPost extends Component
{
    use PostTrait;
    public $post;

    public $showSearch = false;

    public function mount(Post $post)
    {
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.posts.show-post',[
                'categories' => Category::all(),
                'recent_posts' => Post::published()->latest()->take(5)->get(),
                'tags' => Tag::all()
            ])->extends('layouts.single-post')
            ->section('content');
    }
}
