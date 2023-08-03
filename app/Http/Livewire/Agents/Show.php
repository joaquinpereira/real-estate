<?php

namespace App\Http\Livewire\Agents;

use App\Models\Post;
use App\Models\Property;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $showSearchInput = false;

    public $agent;

    public function mount(User $agent)
    {
        $this->agent = $agent;
    }

    public function render()
    {
        return view('livewire.agents.show',[
                'properties' => Property::propertiesActive()->where('user_id', $this->agent->id)->paginate(10),
                'recent_posts' => Post::published()->latest()->take(5)->get(),
                'recent_properties' => Property::propertiesActive()->latest()->take(5)->get(),
            ])
            ->extends('layouts.properties')
            ->section('content');
    }
}
