<?php

namespace App\Filament\Resources\FeatureResource\Pages;

use App\Filament\Resources\FeatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFeatures extends ManageRecords
{
    protected static string $resource = FeatureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
