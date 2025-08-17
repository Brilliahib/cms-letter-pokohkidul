<?php

namespace App\Filament\Resources\SuratTaksirResource\Pages;

use App\Filament\Resources\SuratTaksirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratTaksirs extends ListRecords
{
    protected static string $resource = SuratTaksirResource::class;

    protected static ?string $title = 'Surat Keterangan Taksir Tanah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
