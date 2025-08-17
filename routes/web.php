<?php

use App\Models\SuratDomisili;
use App\Models\SuratKelahiran;
use App\Models\SuratKematian;
use App\Models\SuratKtp;
use App\Models\SuratNikah;
use App\Models\SuratPindah;
use App\Models\SuratTaksir;
use App\Models\SuratTidakMampu;
use App\Models\SuratTugas;
use App\Models\SuratUmum;
use App\Models\SuratUndangan;
use App\Models\SuratUsaha;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/surat-undangan/{record}/pdf', function (SuratUndangan $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-undangan.pdf', ['record' => $record]);

    return $pdf->stream('surat-undangan-' . $record->id . '.pdf');
})->name('surat-undangan.pdf');

Route::get('/surat-umum/{record}/pdf', function (SuratUmum $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-umum.pdf', ['record' => $record]);

    return $pdf->stream('surat-umum-' . $record->id . '.pdf');
})->name('surat-umum.pdf');

Route::get('/surat-usaha/{record}/pdf', function (SuratUsaha $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-usaha.pdf', ['record' => $record]);

    return $pdf->stream('surat-usaha-' . $record->id . '.pdf');
})->name('surat-usaha.pdf');

Route::get('/surat-domisili/{record}/pdf', function (SuratDomisili $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-domisili.pdf', ['record' => $record]);

    return $pdf->stream('surat-domisili-' . $record->id . '.pdf');
})->name('surat-domisili.pdf');

Route::get('/surat-nikah/{record}/pdf', function (SuratNikah $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-nikah.pdf', ['record' => $record]);

    return $pdf->stream('surat-nikah-' . $record->id . '.pdf');
})->name('surat-nikah.pdf');

Route::get('/surat-taksir/{record}/pdf', function (SuratTaksir $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-taksir.pdf', ['record' => $record]);

    return $pdf->stream('surat-taksir-' . $record->id . '.pdf');
})->name('surat-taksir.pdf');

Route::get('/surat-tidak-mampu/{record}/pdf', function (SuratTidakMampu $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-tidak-mampu.pdf', ['record' => $record]);

    return $pdf->stream('surat-tidak-mampu-' . $record->id . '.pdf');
})->name('surat-tidak-mampu.pdf');

Route::get('/surat-tugas/{record}/pdf', function (SuratTugas $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-tugas.pdf', ['record' => $record]);

    return $pdf->stream('surat-tugas-' . $record->id . '.pdf');
})->name('surat-tugas.pdf');

Route::get('/surat-ktp/{record}/pdf', function (SuratKtp $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-ktp.pdf', ['record' => $record]);

    return $pdf->stream('surat-ktp-' . $record->id . '.pdf');
})->name('surat-ktp.pdf');

Route::get('/surat-pindah/{record}/pdf', function (SuratPindah $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-pindah.pdf', ['record' => $record]);

    return $pdf->stream('surat-pindah-' . $record->id . '.pdf');
})->name('surat-pindah.pdf');

Route::get('/surat-kelahiran/{record}/pdf', function (SuratKelahiran $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-kelahiran.pdf', ['record' => $record]);

    return $pdf->stream('surat-kelahiran-' . $record->id . '.pdf');
})->name('surat-kelahiran.pdf');

Route::get('/surat-kematian/{record}/pdf', function (SuratKematian $record) {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('template.surat-kematian.pdf', ['record' => $record]);

    return $pdf->stream('surat-kematian-' . $record->id . '.pdf');
})->name('surat-kematian.pdf');
