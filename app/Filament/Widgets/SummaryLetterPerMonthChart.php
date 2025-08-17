<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
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

class SummaryLetterPerMonthChart extends ChartWidget
{
    protected static ?string $heading = 'Rekap Surat Per Bulan';

    protected function getData(): array
    {
        $start = now()->startOfYear();
        $end   = now()->endOfYear();

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

        $monthlyTotals = [];
        for ($m = 1; $m <= 12; $m++) {
            $key = now()->year . '-' . str_pad($m, 2, '0', STR_PAD_LEFT);
            $monthlyTotals[$key] = 0;
        }

        foreach ($models as $model) {
            $trend = Trend::model($model)
                ->between(start: $start, end: $end)
                ->perMonth()
                ->count();

            foreach ($trend as $value) {
                $monthlyTotals[$value->date] += $value->aggregate;
            }
        }

        $labels = [];
        $data = [];

        foreach ($monthlyTotals as $date => $total) {
            $labels[] = Carbon::parse($date)
                ->locale('id')
                ->translatedFormat('F');
            $data[] = $total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Surat per Bulan',
                    'data' => $data,
                    'backgroundColor' => '#60a5fa',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
