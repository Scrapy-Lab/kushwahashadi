<?php

namespace App\Filament\Resources\SubCasteResource\Pages;

use App\Filament\Resources\SubCasteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubCaste extends EditRecord
{
    protected static string $resource = SubCasteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
