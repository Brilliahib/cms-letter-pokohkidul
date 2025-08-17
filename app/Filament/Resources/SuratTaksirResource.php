<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratTaksirResource\Pages;
use App\Filament\Resources\SuratTaksirResource\RelationManagers;
use App\Models\SuratTaksir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratTaksirResource extends Resource
{
    protected static ?string $model = SuratTaksir::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT TAKSIR TANAH';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')
                    ->hidden(),
                Forms\Components\TextInput::make('jenis_sertifikat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_sertifikat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('letak_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('berupa_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('batas_utara')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('batas_selatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('batas_timur')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('batas_barat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga_tanah_per_m')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga_bangunan_per_m')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas_bangunan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_surat'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('jenis_sertifikat'),
                Tables\Columns\TextColumn::make('nomor_sertifikat'),
                Tables\Columns\TextColumn::make('letak_tanah'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratTaksir $record) => route('surat-taksir.pdf', $record))
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
            'index' => Pages\ListSuratTaksirs::route('/'),
            'create' => Pages\CreateSuratTaksir::route('/create'),
            'edit' => Pages\EditSuratTaksir::route('/{record}/edit'),
        ];
    }
}
