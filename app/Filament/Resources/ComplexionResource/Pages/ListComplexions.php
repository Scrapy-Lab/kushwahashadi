<?php

namespace App\Filament\Resources\ComplexionResource\Pages;

use App\Filament\Resources\ComplexionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComplexions extends ListRecords
{
    protected static string $resource = ComplexionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
