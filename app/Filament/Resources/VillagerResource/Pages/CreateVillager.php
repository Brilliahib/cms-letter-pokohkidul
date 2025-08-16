<?php

namespace App\Filament\Resources\VillagerResource\Pages;

use App\Filament\Resources\VillagerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVillager extends CreateRecord
{
    protected static string $resource = VillagerResource::class;

    protected static ?string $title = 'Tambah Data Penduduk';
}
