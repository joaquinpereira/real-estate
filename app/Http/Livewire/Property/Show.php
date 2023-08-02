<?php

namespace App\Http\Livewire\Property;

use App\Models\Feature;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use Livewire\Component;

class Show extends Component
{
    public $property;

    public function mount(Property $property)
    {
        $this->property = $property;
    }
    public function render()
    {
        return view('livewire.property.show',[
                'featured_properties' => Property::feturedProperties()->paginate(10),
            ])
            ->extends('layouts.properties')
            ->section('content');
    }

}
