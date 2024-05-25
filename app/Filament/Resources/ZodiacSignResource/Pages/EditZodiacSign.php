<?php

namespace App\Filament\Resources\ZodiacSignResource\Pages;

use App\Filament\Resources\ZodiacSignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditZodiacSign extends EditRecord
{
    protected static string $resource = ZodiacSignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
