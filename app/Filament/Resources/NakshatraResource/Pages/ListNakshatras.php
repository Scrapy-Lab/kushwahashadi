<?php

namespace App\Filament\Resources\NakshatraResource\Pages;

use App\Filament\Resources\NakshatraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNakshatras extends ListRecords
{
    protected static string $resource = NakshatraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
