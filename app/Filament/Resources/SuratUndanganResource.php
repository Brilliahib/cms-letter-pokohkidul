<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratUndanganResource\Pages;
use App\Filament\Resources\SuratUndanganResource\RelationManagers;
use App\Models\SuratUndangan;
use Barryvdh\DomPDF\PDF;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratUndanganResource extends Resource
{
    protected static ?string $model = SuratUndangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT UNDANGAN';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')
                    ->hidden(),
                Forms\Components\TextInput::make('sifat')->label('Sifat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lampiran')->label('Lampiran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hal')->label('Hal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_surat')->label('Tanggal Surat')
                    ->required(),
                Forms\Components\TimePicker::make('waktu_surat')->label('Waktu Surat')
                    ->required(),
                Forms\Components\TextInput::make('tempat')->label('Tempat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('acara')->label('Acara')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keterangan')->label('Keterangan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_surat')->label('Nomor Surat'),
                Tables\Columns\TextColumn::make('acara')->label('Acara'),
                Tables\Columns\TextColumn::make('tanggal_surat')->label('Tanggal Surat'),
                Tables\Columns\TextColumn::make('waktu_surat')->label('Waktu Surat'),
                Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratUndangan $record) => route('surat-undangan.pdf', $record))
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
            'index' => Pages\ListSuratUndangans::route('/'),
            'create' => Pages\CreateSuratUndangan::route('/create'),
            'edit' => Pages\EditSuratUndangan::route('/{record}/edit'),
        ];
    }
}
