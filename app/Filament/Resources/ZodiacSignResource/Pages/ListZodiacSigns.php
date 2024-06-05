<?php

namespace App\Filament\Resources\ZodiacSignResource\Pages;

use App\Filament\Resources\ZodiacSignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListZodiacSigns extends ListRecords
{
    protected static string $resource = ZodiacSignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
