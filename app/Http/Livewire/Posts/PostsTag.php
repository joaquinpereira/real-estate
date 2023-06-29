<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\PostTrait;

class PostsTag extends Component
{
    use WithPagination;
    use PostTrait;
    protected $paginationTheme = 'bootstrap';

    public $tag;

    public $showSearch = true;
    public $searchTerm;

    public function mount(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.posts.posts-tag',[
            'posts' => $this->tag->posts()->published()
                ->where('title','like', $searchTerm)->paginate(10),
            'categories' => Category::all(),
            'recent_posts' => Post::published()->latest()->take(5)->get(),
            'tags' => Tag::all()
        ])->extends('layouts.single-post')
        ->section('content');
    }
}
