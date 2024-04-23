<?php

namespace App\Filament\Resources\SubCasteResource\Pages;

use App\Filament\Resources\SubCasteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubCastes extends ListRecords
{
    protected static string $resource = SubCasteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
