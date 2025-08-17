<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratPindahResource\Pages;
use App\Filament\Resources\SuratPindahResource\RelationManagers;
use App\Models\SuratPindah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratPindahResource extends Resource
{
    protected static ?string $model = SuratPindah::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'SK PINDAH';

    protected static ?string $navigationGroup = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')
                    ->hidden(),
                Forms\Components\TextInput::make('no_kk')
                    ->required()
                    ->label('No KK'),
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->label('Nama Lengkap'),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->label('NIK'),
                Forms\Components\TextInput::make('jenis_permohonan')
                    ->required()
                    ->label('Jenis Permohonan'),
                Forms\Components\TextInput::make('alamat_asal')
                    ->required()
                    ->label('Alamat Asal'),
                Forms\Components\TextInput::make('rt_asal')
                    ->required()
                    ->label('RT Asal'),
                Forms\Components\TextInput::make('rw_asal')
                    ->required()
                    ->label('RW Asal'),
                Forms\Components\TextInput::make('desa_kelurahan_asal')
                    ->required()
                    ->label('Desa/Kelurahan Asal'),
                Forms\Components\TextInput::make('kecamatan_asal')
                    ->required()
                    ->label('Kecamatan Asal'),
                Forms\Components\TextInput::make('kabupaten_kota_asal')
                    ->required()
                    ->label('Kabupaten/Kota Asal'),
                Forms\Components\TextInput::make('provinsi_asal')
                    ->required()
                    ->label('Provinsi Asal'),
                Forms\Components\TextInput::make('kodepos_asal')
                    ->required()
                    ->label('Kodepos Asal'),
                Forms\Components\TextInput::make('klasifikasi_kepindahan')
                    ->required()
                    ->label('Klasifikasi Kepindahan'),
                Forms\Components\TextInput::make('alamat_pindah')
                    ->required()
                    ->label('Alamat Pindah'),
                Forms\Components\TextInput::make('rt_pindah')
                    ->required()
                    ->label('RT Pindah'),
                Forms\Components\TextInput::make('rw_pindah')
                    ->required()
                    ->label('RW Pindah'),
                Forms\Components\TextInput::make('desa_kelurahan_pindah')
                    ->required()
                    ->label('Desa/Kelurahan Pindah'),
                Forms\Components\TextInput::make('kecamatan_pindah')
                    ->required()
                    ->label('Kecamatan Pindah'),
                Forms\Components\TextInput::make('kabupaten_kota_pindah')
                    ->required()
                    ->label('Kabupaten/Kota Pindah'),
                Forms\Components\TextInput::make('provinsi_pindah')
                    ->required()
                    ->label('Provinsi Pindah'),
                Forms\Components\TextInput::make('kodepos_pindah')
                    ->required()
                    ->label('Kodepos Pindah'),
                Forms\Components\TextInput::make('alasan_pindah')
                    ->required()
                    ->label('Alasan Pindah'),
                Forms\Components\TextInput::make('jenis_kepindahan')
                    ->required()
                    ->label('Jenis Kepindahan'),
                Forms\Components\TextInput::make('anggota_keluarga_tidak_pindah')
                    ->required()
                    ->label('Anggota Keluarga Tidak Pindah'),
                Forms\Components\TextInput::make('anggota_keluarga_pindah')
                    ->required()
                    ->label('Anggota Keluarga Pindah'),
                Forms\Components\Repeater::make('anggota')
                    ->label('Daftar Anggota Keluarga yang Pindah')
                    ->relationship('anggota')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('nik')
                            ->label('NIK')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('shdk')
                            ->label('SHDK')
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
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->label('Nama Lengkap'),
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK'),
                Tables\Columns\TextColumn::make('jenis_permohonan')
                    ->label('Jenis Permohonan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('cetak')
                    ->label('Print Surat')
                    ->icon('heroicon-o-printer')
                    ->url(fn(SuratPindah $record) => route('surat-pindah.pdf', $record))
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
            'index' => Pages\ListSuratPindahs::route('/'),
            'create' => Pages\CreateSuratPindah::route('/create'),
            'edit' => Pages\EditSuratPindah::route('/{record}/edit'),
        ];
    }
}
