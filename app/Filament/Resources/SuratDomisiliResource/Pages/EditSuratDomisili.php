<?php

namespace App\Filament\Resources\SuratDomisiliResource\Pages;

use App\Filament\Resources\SuratDomisiliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratDomisili extends EditRecord
{
    protected static string $resource = SuratDomisiliResource::class;

    protected static ?string $title = 'Edit SK Domisili';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
