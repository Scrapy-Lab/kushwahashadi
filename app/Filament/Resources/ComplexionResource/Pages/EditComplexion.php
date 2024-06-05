<?php

namespace App\Filament\Resources\ComplexionResource\Pages;

use App\Filament\Resources\ComplexionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComplexion extends EditRecord
{
    protected static string $resource = ComplexionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
