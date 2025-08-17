<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratTidakMampuResource\Pages;
use App\Filament\Resources\SuratTidakMampuResource\RelationManagers;
use App\Models\SuratTidakMampu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratTidakMampuResource extends Resource
{
    protected static ?string $model = SuratTidakMampu::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT TIDAK MAMPU';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama'),
                Forms\Components\Select::make('jenis_kelamin')
                    ->required()
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->label('Jenis Kelamin'),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required()
                    ->label('Tempat Lahir'),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required()
                    ->label('Tanggal Lahir'),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->label('NIK'),
                Forms\Components\TextInput::make('no_kk')
                    ->required()
                    ->label('No KK'),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->label('Alamat'),
                Forms\Components\TextInput::make('keperluan')
                    ->required()
                    ->label('Keperluan'),
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
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat'),
                Tables\Columns\TextColumn::make('keperluan')
                    ->label('Keperluan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratTidakMampu $record) => route('surat-tidak-mampu.pdf', $record))
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
            'index' => Pages\ListSuratTidakMampus::route('/'),
            'create' => Pages\CreateSuratTidakMampu::route('/create'),
            'edit' => Pages\EditSuratTidakMampu::route('/{record}/edit'),
        ];
    }
}
