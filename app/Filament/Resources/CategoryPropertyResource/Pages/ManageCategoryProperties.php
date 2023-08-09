<?php

namespace App\Filament\Resources\CategoryPropertyResource\Pages;

use App\Filament\Resources\CategoryPropertyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryProperties extends ManageRecords
{
    protected static string $resource = CategoryPropertyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
