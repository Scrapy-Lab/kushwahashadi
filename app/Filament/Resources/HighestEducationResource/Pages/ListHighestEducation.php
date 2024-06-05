<?php

namespace App\Filament\Resources\HighestEducationResource\Pages;

use App\Filament\Resources\HighestEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHighestEducation extends ListRecords
{
    protected static string $resource = HighestEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
