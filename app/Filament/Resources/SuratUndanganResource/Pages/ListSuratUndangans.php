<?php

namespace App\Filament\Resources\SuratUndanganResource\Pages;

use App\Filament\Resources\SuratUndanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratUndangans extends ListRecords
{
    protected static string $resource = SuratUndanganResource::class;

    protected static ?string $title = 'Surat Undangan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
