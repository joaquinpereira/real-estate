<?php

namespace App\Http\Livewire\Property;

use App\Models\Property;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.property.index',[
            'properties' => Property::propertiesActive()->paginate(10)
        ])
        ->extends('layouts.properties')
        ->section('content');;
    }
}
