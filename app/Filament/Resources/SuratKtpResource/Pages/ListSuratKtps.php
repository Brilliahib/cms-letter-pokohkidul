<?php

namespace App\Filament\Resources\SuratKtpResource\Pages;

use App\Filament\Resources\SuratKtpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratKtps extends ListRecords
{
    protected static string $resource = SuratKtpResource::class;

    protected static ?string $title = 'Surat Permohonan KTP';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
