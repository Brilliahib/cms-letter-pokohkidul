<?php

namespace App\Filament\Resources\SuratDomisiliResource\Pages;

use App\Filament\Resources\SuratDomisiliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratDomisilis extends ListRecords
{
    protected static string $resource = SuratDomisiliResource::class;

    protected static ?string $title = 'SK Domisili';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
