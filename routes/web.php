<?php

use App\Models\SuratDomisili;
use App\Models\SuratNikah;
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
