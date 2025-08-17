<?php

namespace App\Filament\Resources\SuratPindahResource\Pages;

use App\Filament\Resources\SuratPindahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPindah extends EditRecord
{
    protected static string $resource = SuratPindahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
