<?php

namespace App\Filament\Resources\FamilyValueResource\Pages;

use App\Filament\Resources\FamilyValueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFamilyValues extends ListRecords
{
    protected static string $resource = FamilyValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
