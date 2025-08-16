<?php

namespace App\Filament\Resources\VillagerResource\Pages;

use App\Filament\Resources\VillagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVillagers extends ListRecords
{
    protected static string $resource = VillagerResource::class;

    protected static ?string $title = 'Data Penduduk';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
