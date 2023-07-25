<?php

namespace App\Http\Livewire\Property;

use App\Models\Property;
use Livewire\Component;

class Show extends Component
{
    public $property;

    public $showSearch = false;

    public function mount(Property $property)
    {
        $this->property = $property;
    }
    public function render()
    {
        return view('livewire.property.show',[
                'featured_properties' => Property::feturedProperties()->take(10)->get(),
            ])
            ->extends('layouts.front')
            ->section('content');
    }
}
