<?php

namespace App\Filament\Resources\SuratTidakMampuResource\Pages;

use App\Filament\Resources\SuratTidakMampuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuratTidakMampu extends CreateRecord
{
    protected static string $resource = SuratTidakMampuResource::class;

    protected static ?string $title = 'Tambah Surat Keterangan Tidak Mampu';
}
