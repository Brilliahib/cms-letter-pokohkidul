<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillagerResource\Pages;
use App\Filament\Resources\VillagerResource\RelationManagers;
use App\Models\Villager;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VillagerResource extends Resource
{
    protected static ?string $model = Villager::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'DATA PENDUDUK';

    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_kk')->label('Nomor KK')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')->label('NIK')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('gender')->label('Jenis Kelamin')
                    ->required()
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ]),
                Forms\Components\TextInput::make('tempat_lahir')->label('Tempat Lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir')->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\TextInput::make('agama')->label('Agama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pendidikan')->label('Pendidikan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pekerjaan')->label('Pekerjaan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status_perkawinan')->label('Status Perkawinan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('shdk')->label('SHDK')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kewarganegaraan')->label('Kewarganegaraan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')->label('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rt')->label('RT')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rw')->label('RW')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_ibu')->label('Nama Ibu')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_ayah')->label('Nama Ayah')
                    ->maxLength(255),
                Forms\Components\TextInput::make('umur')->label('Umur')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kriteria_usia')->label('Kriteria Usia')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama Lengkap'),
                Tables\Columns\TextColumn::make('no_kk')->label('Nomor KK'),
                Tables\Columns\TextColumn::make('nik')->label('NIK'),
                Tables\Columns\TextColumn::make('gender')->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat'),
                Tables\Columns\TextColumn::make('rt')->label('RT'),
                Tables\Columns\TextColumn::make('rw')->label('RW'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListVillagers::route('/'),
            'create' => Pages\CreateVillager::route('/create'),
            'edit' => Pages\EditVillager::route('/{record}/edit'),
        ];
    }
}
