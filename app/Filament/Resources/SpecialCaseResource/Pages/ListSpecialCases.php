<?php

namespace App\Filament\Resources\SpecialCaseResource\Pages;

use App\Filament\Resources\SpecialCaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialCases extends ListRecords
{
    protected static string $resource = SpecialCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
