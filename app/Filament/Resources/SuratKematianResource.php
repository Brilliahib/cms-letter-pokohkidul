<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratKematianResource\Pages;
use App\Filament\Resources\SuratKematianResource\RelationManagers;
use App\Models\SuratKematian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratKematianResource extends Resource
{
    protected static ?string $model = SuratKematian::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SURAT KEMATIAN';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nik')
                    ->label('NIK')
                    ->required(),
                Forms\Components\TextInput::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->required(),
                Forms\Components\TextInput::make('anak_ke')
                    ->label('Anak Ke')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_kematian')
                    ->label('Tanggal Kematian')
                    ->required(),
                Forms\Components\TimePicker::make('pukul')
                    ->label('Pukul')
                    ->required(),
                Forms\Components\TextInput::make('sebab_kematian')
                    ->label('Sebab Kematian')
                    ->required(),
                Forms\Components\TextInput::make('tempat_kematian')
                    ->label('Tempat Kematian')
                    ->required(),
                Forms\Components\TextInput::make('yang_menerangkan')
                    ->label('Yang Menerangkan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_surat')
                    ->label('Nomor Surat'),
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->label('Nama Lengkap'),
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK'),
                Tables\Columns\TextColumn::make('tanggal_kematian')
                    ->label('Tanggal Kematian'),
                Tables\Columns\TextColumn::make('sebab_kematian')
                    ->label('Sebab Kematian'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratKematian $record) => route('surat-kematian.pdf', $record))
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
            'index' => Pages\ListSuratKematians::route('/'),
            'create' => Pages\CreateSuratKematian::route('/create'),
            'edit' => Pages\EditSuratKematian::route('/{record}/edit'),
        ];
    }
}
