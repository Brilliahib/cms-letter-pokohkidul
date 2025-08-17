<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SURAT PERINTAH TUGAS</title>
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

        table.data td {
            padding: 2px 6px;
            vertical-align: top;
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

    <h4 style="text-align:center; text-decoration: underline; margin-bottom:0;">SURAT PERINTAH TUGAS</h4>
    <p style="text-align:center; margin-top:0;">Nomor: {{ $record->nomor_surat }}</p>

    <table class="data">
        <tr>
            <td style="width:150px;">Dasar Surat</td>
            <td>: {{ $record->dasar_surat ?? '-' }}</td>
        </tr>
        <tr>
            <td>Kepada</td>
            <td>:</td>
        </tr>
    </table>

    <table class="data" style="margin-left:40px;">
        @foreach ($record->anggota as $index => $anggota)
        <tr>
            <td style="width:30px;">{{ $index+1 }}.</td>
            <td style="width:80px;">Nama</td>
            <td>: {{ strtoupper($anggota->name) }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Jabatan</td>
            <td>: {{ strtoupper($anggota->jabatan) }}</td>
        </tr>
        @endforeach
    </table>

    <table class="data" style="margin-top:10px;">
        <tr>
            <td style="width:150px;">Untuk</td>
            <td>: {{ strtoupper($record->keperluan_tugas) }}</td>
        </tr>
    </table>

    <div class="ttd">
        Pokoh Kidul, {{ \Carbon\Carbon::parse($record->created_at)->translatedFormat('d F Y') }} <br>
        Kepala Desa Pokoh Kidul<br><br><br><br>
        <strong><u>WURYATNO</u></strong>
    </div>
</body>

</html>