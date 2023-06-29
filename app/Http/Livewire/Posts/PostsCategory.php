<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\PostTrait;

class PostsCategory extends Component
{
    use WithPagination;
    use PostTrait;
    protected $paginationTheme = 'bootstrap';

    public $category;

    public $showSearch = true;
    public $searchTerm;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.posts.posts-category',[
            'posts' => Post::published()
            ->where('category_id', $this->category->id)
            ->where('title','like', $searchTerm)->paginate(10),
            'categories' => Category::all(),
            'recent_posts' => Post::published()->latest()->take(5)->get(),
            'tags' => Tag::all()
        ])->extends('layouts.single-post')
        ->section('content');
    }

}
