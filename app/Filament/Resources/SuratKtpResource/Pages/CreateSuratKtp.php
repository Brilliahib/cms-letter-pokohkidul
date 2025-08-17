<?php

namespace App\Filament\Resources\SuratKtpResource\Pages;

use App\Filament\Resources\SuratKtpResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuratKtp extends CreateRecord
{
    protected static string $resource = SuratKtpResource::class;

    protected static ?string $title = 'Tambah Surat Permohonan KTP';
}
