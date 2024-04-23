<?php

namespace App\Filament\Resources\OnBehalfResource\Pages;

use App\Filament\Resources\OnBehalfResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnBehalf extends EditRecord
{
    protected static string $resource = OnBehalfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
