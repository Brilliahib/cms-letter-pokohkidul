<?php

namespace App\Filament\Resources\SuratUndanganResource\Pages;

use App\Filament\Resources\SuratUndanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratUndangan extends EditRecord
{
    protected static string $resource = SuratUndanganResource::class;

    protected static ?string $title = 'Edit Surat Undangan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
