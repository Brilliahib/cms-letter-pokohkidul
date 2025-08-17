<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratTugasResource\Pages;
use App\Filament\Resources\SuratTugasResource\RelationManagers;
use App\Models\SuratTugas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratTugasResource extends Resource
{
    protected static ?string $model = SuratTugas::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT PERINTAH TUGAS';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('dasar_surat')
                    ->required()
                    ->label('Dasar Surat'),
                Forms\Components\TextInput::make('keperluan_tugas')
                    ->label('Keperluan Tugas')
                    ->required(),

                Forms\Components\Repeater::make('anggota')
                    ->label('Daftar Anggota')
                    ->relationship('anggota')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('jabatan')
                            ->label('Jabatan')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->createItemButtonLabel('Tambah Anggota')
                    ->columns(1)
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_surat')
                    ->label('Nomor Surat'),
                Tables\Columns\TextColumn::make('keperluan_tugas')
                    ->label('Keperluan Tugas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratTugas $record) => route('surat-tugas.pdf', $record))
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
            'index' => Pages\ListSuratTugas::route('/'),
            'create' => Pages\CreateSuratTugas::route('/create'),
            'edit' => Pages\EditSuratTugas::route('/{record}/edit'),
        ];
    }
}
