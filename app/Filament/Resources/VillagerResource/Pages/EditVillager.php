<?php

namespace App\Filament\Resources\VillagerResource\Pages;

use App\Filament\Resources\VillagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVillager extends EditRecord
{
    protected static string $resource = VillagerResource::class;

    protected static ?string $title = 'Edit Data Penduduk';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
