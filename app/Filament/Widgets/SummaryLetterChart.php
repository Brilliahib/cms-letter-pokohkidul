<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
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

class SummaryLetterChart extends ChartWidget
{
    protected static ?string $heading = 'Rekap Surat Keseluruhan';

    protected function getData(): array
    {
        $data = [
            'Surat Undangan'     => SuratUndangan::count(),
            'Surat Keterangan Umum'         => SuratUmum::count(),
            'Surat Keterangan Usaha'        => SuratUsaha::count(),
            'Surat Keterangan Domisili'     => SuratDomisili::count(),
            'Surat Pengantar Nikah'        => SuratNikah::count(),
            'Surat Keterangan Kelahiran'    => SuratKelahiran::count(),
            'Surat Keterangan Kematian'     => SuratKematian::count(),
            'Surat Keterangan Pindah'       => SuratPindah::count(),
            'Surat Keterangan Taksir Harga Tanah'       => SuratTaksir::count(),
            'Surat Permohonan KTP'          => SuratKtp::count(),
            'Surat Keterangan Tidak Mampu'  => SuratTidakMampu::count(),
            'Surat Perintah Tugas'        => SuratTugas::count(),
        ];

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Surat',
                    'data' => array_values($data),
                    'backgroundColor' => [
                        '#f87171', // merah
                        '#60a5fa', // biru
                        '#34d399', // hijau
                        '#fbbf24', // kuning
                        '#a78bfa', // ungu
                        '#f472b6', // pink
                        '#38bdf8', // cyan
                        '#facc15', // amber
                        '#4ade80', // lime
                        '#c084fc', // violet
                        '#fb7185', // rose
                        '#22d3ee', // teal
                    ],
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'pie'; // bisa juga 'doughnut'
    }
}
