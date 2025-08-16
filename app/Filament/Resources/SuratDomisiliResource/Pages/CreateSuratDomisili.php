<?php

namespace App\Filament\Resources\SuratDomisiliResource\Pages;

use App\Filament\Resources\SuratDomisiliResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuratDomisili extends CreateRecord
{
    protected static string $resource = SuratDomisiliResource::class;

    protected static ?string $title = 'Tambah SK Domisili';
}
