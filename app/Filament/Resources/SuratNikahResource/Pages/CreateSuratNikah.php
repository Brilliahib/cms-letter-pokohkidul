<?php

namespace App\Filament\Resources\SuratNikahResource\Pages;

use App\Filament\Resources\SuratNikahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuratNikah extends CreateRecord
{
    protected static string $resource = SuratNikahResource::class;

    protected static ?string $title = 'Tambah Surat Pengantar Nikah';
}
