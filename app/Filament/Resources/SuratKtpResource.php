<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratKtpResource\Pages;
use App\Filament\Resources\SuratKtpResource\RelationManagers;
use App\Models\SuratKtp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratKtpResource extends Resource
{
    protected static ?string $model = SuratKtp::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT PERMOHONAN KTP';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')
                    ->hidden(),
                Forms\Components\TextInput::make('provinsi')
                    ->label('Provinsi')
                    ->required(),
                Forms\Components\TextInput::make('kabupaten_kota')
                    ->label('Kabupaten/Kota')
                    ->required(),
                Forms\Components\TextInput::make('kecamatan')
                    ->label('Kecamatan')
                    ->required(),
                Forms\Components\TextInput::make('desa_kelurahan')
                    ->label('Desa/Kelurahan')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                Forms\Components\TextInput::make('nik')
                    ->label('NIK')
                    ->required(),
                Forms\Components\TextInput::make('no_kk')
                    ->label('No KK')
                    ->required(),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\TextInput::make('umur')
                    ->label('Umur')
                    ->required(),
                Forms\Components\TextInput::make('rt')
                    ->label('RT')
                    ->required(),
                Forms\Components\TextInput::make('rw')
                    ->label('RW')
                    ->required(),
                Forms\Components\TextInput::make('daerah')
                    ->label('Daerah')
                    ->required(),
                Forms\Components\TextInput::make('alamat_lengkap')
                    ->label('Alamat Lengkap')
                    ->required(),
                Forms\Components\TextInput::make('kode_pos')
                    ->label('Kode Pos')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_surat')
                    ->label('Nomor Surat'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('desa_kelurahan')
                    ->label('Desa/Kelurahan'),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->label('Kecamatan'),
                Tables\Columns\TextColumn::make('kabupaten_kota')
                    ->label('Kabupaten/Kota'),
                Tables\Columns\TextColumn::make('provinsi')
                    ->label('Provinsi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratKtp $record) => route('surat-ktp.pdf', $record))
                    ->openUrlInNewTab()
                    ->color('black'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuratKtps::route('/'),
            'create' => Pages\CreateSuratKtp::route('/create'),
            'edit' => Pages\EditSuratKtp::route('/{record}/edit'),
        ];
    }
}
