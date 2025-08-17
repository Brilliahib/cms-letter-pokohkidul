<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratKelahiranResource\Pages;
use App\Filament\Resources\SuratKelahiranResource\RelationManagers;
use App\Models\SuratKelahiran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratKelahiranResource extends Resource
{
    protected static ?string $model = SuratKelahiran::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT KELAHIRAN';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')
                    ->hidden(),
                Forms\Components\TextInput::make('nama_anak')
                    ->label('Nama Anak')
                    ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-Laki' => 'Laki-Laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('tempat_dilahirkan')
                    ->label('Tempat Dilahirkan')
                    ->required(),
                Forms\Components\TextInput::make('tempat_kelahiran')
                    ->label('Tempat Kelahiran')
                    ->required(),
                Forms\Components\TextInput::make('sebab_lahir')
                    ->label('Sebab Lahir')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\TimePicker::make('waktu_lahir')
                    ->label('Waktu Lahir')
                    ->required(),
                Forms\Components\TextInput::make('jenis_kelahiran')
                    ->label('Jenis Kelahiran')
                    ->required(),
                Forms\Components\TextInput::make('kelahiran_ke')
                    ->label('Kelahiran Ke')
                    ->required(),
                Forms\Components\TextInput::make('penolongan_kelahiran')
                    ->label('Penolongan Kelahiran')
                    ->required(),
                Forms\Components\TextInput::make('berat_bayi')
                    ->label('Berat Bayi')
                    ->required(),
                Forms\Components\TextInput::make('panjang_bayi')
                    ->label('Panjang Bayi')
                    ->required(),
                Forms\Components\TextInput::make('lama_kandungan')
                    ->label('Lama Kandungan')
                    ->required(),
                Forms\Components\TextInput::make('anak_ke')
                    ->label('Anak Ke')
                    ->required(),
                Forms\Components\TextInput::make('yang_menentukan')
                    ->label('Yang Menentukan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_surat')
                    ->label('Nomor Surat'),
                Tables\Columns\TextColumn::make('nama_anak')
                    ->label('Nama Anak'),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('tempat_dilahirkan')
                    ->label('Tempat Dilahirkan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratKelahiran $record) => route('surat-kelahiran.pdf', $record))
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
            'index' => Pages\ListSuratKelahirans::route('/'),
            'create' => Pages\CreateSuratKelahiran::route('/create'),
            'edit' => Pages\EditSuratKelahiran::route('/{record}/edit'),
        ];
    }
}
