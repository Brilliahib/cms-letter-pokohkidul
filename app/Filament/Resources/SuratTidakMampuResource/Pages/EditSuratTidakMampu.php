<?php

namespace App\Filament\Resources\SuratTidakMampuResource\Pages;

use App\Filament\Resources\SuratTidakMampuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratTidakMampu extends EditRecord
{
    protected static string $resource = SuratTidakMampuResource::class;

    protected static ?string $title = 'Edit Surat Keterangan Tidak Mampu';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
