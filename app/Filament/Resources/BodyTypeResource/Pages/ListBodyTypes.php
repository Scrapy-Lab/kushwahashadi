<?php

namespace App\Filament\Resources\BodyTypeResource\Pages;

use App\Filament\Resources\BodyTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBodyTypes extends ListRecords
{
    protected static string $resource = BodyTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
