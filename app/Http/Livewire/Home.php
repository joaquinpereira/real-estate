<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Property;
use Livewire\Component;

class Home extends Component
{

    public function render()
    {
        return view('livewire.home',[
                    'featured_properties' => Property::feturedProperties()->take(10)->get(),
                    'recent_properties' => Property::propertiesActive()->take(10)->get(),
                    'lastest_news' => Post::published()->take(3)->get()
                ])
                ->extends('layouts.front')
                ->section('content');
    }
}
