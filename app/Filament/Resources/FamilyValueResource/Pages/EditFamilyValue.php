<?php

namespace App\Filament\Resources\FamilyValueResource\Pages;

use App\Filament\Resources\FamilyValueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFamilyValue extends EditRecord
{
    protected static string $resource = FamilyValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
