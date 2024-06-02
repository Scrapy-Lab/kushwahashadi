<?php

namespace App\Filament\Resources\SpecialCaseResource\Pages;

use App\Filament\Resources\SpecialCaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialCase extends EditRecord
{
    protected static string $resource = SpecialCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
