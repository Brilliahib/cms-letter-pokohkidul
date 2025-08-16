<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Undangan</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            font-size: 12pt;
        }

        .header {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .header-table td {
            vertical-align: top;
        }

        .header img {
            width: 90px;
            height: 110px;
        }

        .kop {
            text-align: center;
            line-height: 1.4;
            width: 100%;
        }

        .kop strong {
            display: block;
        }

        .content {
            margin-top: 20px;
        }

        .ttd {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <table class="header-table">
            <tr>
                <td style="width:100px;">
                    <img src="{{ public_path('logo.png') }}" alt="Logo">
                </td>
                <td class="kop">
                    <strong>PEMERINTAH KABUPATEN WONOGIRI</strong>
                    <strong>KECAMATAN WONOGIRI</strong>
                    <strong>KEPALA DESA POKOH KIDUL</strong>
                    Karangtalun RT. 01 RW. 03 Pokoh Kidul, Wonogiri, 57615 <br>
                    Telepon 0823 2425 7542 <br>
                    Laman www.pokohkidul.desa.id Pos-el pokohkidulwonogiri@gmail.com
                </td>
            </tr>
        </table>
    </div>

    <div style="text-align: right;">
        Pokoh Kidul, {{ \Carbon\Carbon::parse($record->tanggal_surat)->translatedFormat('d F Y') }}
    </div>

    <div class="content">
        <table>
            <tr>
                <td>Nomor</td>
                <td>: {{ $record->nomor_surat }}</td>
            </tr>
            <tr>
                <td>Sifat</td>
                <td>: {{ $record->sifat }}</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>: {{ $record->lampiran }}</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td>: {{ $record->hal }}</td>
            </tr>
        </table>

        <p>Yth. Bapak/Ibu/Sdr di Tempat</p>
        <p>Dengan hormat,</p>
        <p>Dengan ini mengharap kehadiran Bapak/Ibu/Sdr/i besok pada:</p>

        <table>
            <tr>
                <td>Hari/Tanggal</td>
                <td>: {{ \Carbon\Carbon::parse($record->tanggal_surat)->translatedFormat('l, d F Y') }}</td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>: {{ \Carbon\Carbon::parse($record->waktu_surat)->format('H:i') }} WIB</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>: {{ $record->tempat }}</td>
            </tr>
            <tr>
                <td>Acara</td>
                <td>: {{ $record->acara }}</td>
            </tr>

            <tr>
                <td>Keterangan</td>
                <td>: {{ $record->keterangan }}</td>
            </tr>
        </table>

        <p>Demikian surat undangan ini kami sampaikan, atas perhatian dan kehadirannya diucapkan terima kasih.</p>
    </div>

    <div class="ttd">
        Kepala Desa Pokoh Kidul<br><br><br><br>
        <strong><u>WURYATNO</u></strong>
    </div>
</body>

</html>