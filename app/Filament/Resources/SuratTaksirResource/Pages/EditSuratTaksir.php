<?php

namespace App\Filament\Resources\SuratTaksirResource\Pages;

use App\Filament\Resources\SuratTaksirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratTaksir extends EditRecord
{
    protected static string $resource = SuratTaksirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
