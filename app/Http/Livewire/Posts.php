<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use App\Models\Tag;

class Posts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $showSearch = true;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.posts.posts',[
            'posts' => Post::published()->where('title','like', $searchTerm)->paginate(10),
            'categories' => Category::all(),
            'recent_posts' => Post::published()->latest()->take(5)->get(),
            'tags' => Tag::all()
        ]);
    }
}
