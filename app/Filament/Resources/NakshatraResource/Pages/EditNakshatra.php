<?php

namespace App\Filament\Resources\NakshatraResource\Pages;

use App\Filament\Resources\NakshatraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNakshatra extends EditRecord
{
    protected static string $resource = NakshatraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
