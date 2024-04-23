<?php

namespace App\Filament\Resources\FamilyStatusResource\Pages;

use App\Filament\Resources\FamilyStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFamilyStatuses extends ListRecords
{
    protected static string $resource = FamilyStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
