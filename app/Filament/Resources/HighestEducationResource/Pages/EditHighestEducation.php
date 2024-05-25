<?php

namespace App\Filament\Resources\HighestEducationResource\Pages;

use App\Filament\Resources\HighestEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHighestEducation extends EditRecord
{
    protected static string $resource = HighestEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
