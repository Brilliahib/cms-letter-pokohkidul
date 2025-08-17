<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\SuratKematian;
use App\Models\SuratKelahiran;
use App\Models\SuratTugas;
use App\Models\SuratDomisili;
use App\Models\SuratKtp;
use App\Models\SuratNikah;
use App\Models\SuratPindah;
use App\Models\SuratTaksir;
use App\Models\SuratTidakMampu;
use App\Models\SuratUmum;
use App\Models\SuratUndangan;
use App\Models\SuratUsaha;
use Carbon\Carbon;

class ATotalLetterWidget extends BaseWidget
{
    protected function getCards(): array
    {
        $models = [
            SuratUndangan::class,
            SuratUmum::class,
            SuratUsaha::class,
            SuratDomisili::class,
            SuratNikah::class,
            SuratKelahiran::class,
            SuratKematian::class,
            SuratPindah::class,
            SuratTaksir::class,
            SuratKtp::class,
            SuratTidakMampu::class,
            SuratTugas::class,
        ];

        // Total semua surat
        $totalAll = 0;
        foreach ($models as $model) {
            $totalAll += $model::count();
        }

        // Total surat bulan ini
        $startMonth = Carbon::now()->startOfMonth();
        $endMonth   = Carbon::now()->endOfMonth();
        $totalThisMonth = 0;
        foreach ($models as $model) {
            $totalThisMonth += $model::whereBetween('created_at', [$startMonth, $endMonth])->count();
        }

        // Total surat minggu ini
        $startWeek = Carbon::now()->startOfWeek();
        $endWeek   = Carbon::now()->endOfWeek();
        $totalThisWeek = 0;
        foreach ($models as $model) {
            $totalThisWeek += $model::whereBetween('created_at', [$startWeek, $endWeek])->count();
        }

        return [
            Card::make('Jumlah Semua Surat', $totalAll)
                ->description('Total keseluruhan surat yang sudah tercatat')
                ->color('success'),

            Card::make('Surat Bulan Ini', $totalThisMonth)
                ->description('Total surat yang dibuat pada bulan ' . $startMonth->translatedFormat('F'))
                ->color('info'),

            Card::make('Surat Minggu Ini', $totalThisWeek)
                ->description('Total surat yang dibuat minggu ini')
                ->color('warning'),
        ];
    }
}
