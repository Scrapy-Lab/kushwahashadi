<?php

namespace App\Filament\Resources\OnBehalfResource\Pages;

use App\Filament\Resources\OnBehalfResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnBehalves extends ListRecords
{
    protected static string $resource = OnBehalfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
