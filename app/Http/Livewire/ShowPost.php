<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class ShowPost extends Component
{
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
