<?php

namespace App\Filament\Resources\EmployedInResource\Pages;

use App\Filament\Resources\EmployedInResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployedIn extends EditRecord
{
    protected static string $resource = EmployedInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
