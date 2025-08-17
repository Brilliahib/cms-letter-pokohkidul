<?php

namespace App\Filament\Resources\SuratTidakMampuResource\Pages;

use App\Filament\Resources\SuratTidakMampuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratTidakMampus extends ListRecords
{
    protected static string $resource = SuratTidakMampuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
