<?php

namespace App\Filament\Resources\SuratKtpResource\Pages;

use App\Filament\Resources\SuratKtpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratKtp extends EditRecord
{
    protected static string $resource = SuratKtpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
