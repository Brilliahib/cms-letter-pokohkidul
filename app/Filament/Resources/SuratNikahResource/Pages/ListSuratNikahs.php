<?php

namespace App\Filament\Resources\SuratNikahResource\Pages;

use App\Filament\Resources\SuratNikahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratNikahs extends ListRecords
{
    protected static string $resource = SuratNikahResource::class;

    protected static ?string $title = 'Surat Nikah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
