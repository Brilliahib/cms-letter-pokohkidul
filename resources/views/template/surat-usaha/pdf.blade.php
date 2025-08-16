<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SK USAHA</title>
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

    <h4 style="text-align:center; text-decoration: underline; margin-bottom:0;">SURAT KETERANGAN USAHA</h4>
    <p style="text-align:center; margin-top:0;">Nomor: {{ $record->nomor_surat }}</p>

    <div class="content">
        <p>Yang bertanda tangan di bawah ini :</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>: WURYATNO</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: Kepala Desa</td>
            </tr>
        </table>

        <p>Dengan ini menerangkan bahwa:</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ $record->name }}</td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>: {{ strtoupper($record->jenis_kelamin) }}</td>
            </tr>
            <tr>
                <td>Tempat, tanggal lahir</td>
                <td>: {{ strtoupper($record->tempat_lahir) }}, {{ \Carbon\Carbon::parse($record->tanggal_lahir)->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Bukti diri</td>
                <td>: </td>
            </tr>
            <tr>
                <td style="padding-left:30px;">NIK</td>
                <td>: {{ $record->nik }}</td>
            </tr>
            <tr>
                <td style="padding-left:30px;">No. KK</td>
                <td>: {{ $record->no_kk }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $record->alamat }}</td>
            </tr>
        </table>

        <p>Adalah benar-benar penduduk Desa Pokoh Kidul, dan menurut keterangan yang bersangkutan mempunyai usaha {{$record->nama_usaha}} sejak tahun {{$record->tahun_usaha}}.

        </p>
        <p>Surat Keterangan ini diperlukan untuk{{ $record->keperluan }}</p>

        <p>Demikian surat keterangan ini kami buat dengan sebenarnya, agar dipergunakan sebagaimana mestinya.</p>
    </div>

    <div class="ttd">
        Pokoh Kidul, {{ \Carbon\Carbon::parse($record->created_at)->translatedFormat('d F Y') }} <br>
        Kepala Desa Pokoh Kidul<br><br><br><br>
        <strong><u>WURYATNO</u></strong>
    </div>
</body>

</html>