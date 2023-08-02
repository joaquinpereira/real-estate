<?php

namespace App\Http\Livewire\Property;

use App\Models\CategoryProperty;
use App\Models\Feature;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchTerm;

    public $type;

    public $category;

    public $status;

    public $propertyFeatures = [];


    public function render()
    {
        return view('livewire.property.index',
            [
                'properties' => $this->queryProperties()->paginate(10),
                'statuses' => PropertyStatus::all(),
                'types' => PropertyType::all(),
                'features' => Feature::all(),
                'categories' => CategoryProperty::all()
            ])
        ->extends('layouts.properties')
        ->section('content');
    }

    public function updatedType()
    {
        $this->resetPage();
    }
    public function updatedStatus()
    {
        $this->resetPage();
    }
    public function updatedCategory()
    {
        $this->resetPage();
    }
    public function updatedPropertyFeatures()
    {
        $this->resetPage();
    }

    public function queryProperties()
    {
        $properties = Property::query();
        $properties->propertiesActive();

        if(!empty($this->type))
        {
            $properties->where('property_type_id',$this->type);
        }
        if(!empty($this->status))
        {
            $properties->where('property_status_id',$this->status);
        }
        if(!empty($this->category))
        {
            $properties->where('category_id',$this->category);
        }
        if(!empty($this->propertyFeatures))
        {
            $features = $this->propertyFeatures;
            $properties->whereHas('features', function ($query) use($features){
                $query->whereIn('feature_id', $features);
            });
        }

        if(!empty($this->searchTerm))
        {
            $searchTerm = '%'.$this->searchTerm.'%';

            $properties->where(function($query) use($searchTerm)
            {
                return $query->orwhere('title','like', $searchTerm)
                    ->orWhere('description','like', $searchTerm)
                    ->orWhere('address','like', $searchTerm);
            });
        }

        return $properties;
    }
}
