<?php

namespace App\Filament\Resources\SuratPindahResource\Pages;

use App\Filament\Resources\SuratPindahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPindahs extends ListRecords
{
    protected static string $resource = SuratPindahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
