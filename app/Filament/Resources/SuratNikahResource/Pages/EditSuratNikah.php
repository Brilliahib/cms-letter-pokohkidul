<?php

namespace App\Filament\Resources\SuratNikahResource\Pages;

use App\Filament\Resources\SuratNikahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratNikah extends EditRecord
{
    protected static string $resource = SuratNikahResource::class;

    protected static ?string $title = 'Edit Surat Nikah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
