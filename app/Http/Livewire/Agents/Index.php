<?php

namespace App\Http\Livewire\Agents;

use App\Models\Post;
use App\Models\Property;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.agents.index', [
                'agents' => User::role('super-admin')
                    ->where('name', 'like', $searchTerm)
                    ->paginate(5),
                'recent_posts' => Post::published()->latest()->take(5)->get(),
                'recent_properties' => Property::propertiesActive()->latest()->take(5)->get(),
            ])
            ->extends('layouts.properties')
            ->section('content');;
    }

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }
}
