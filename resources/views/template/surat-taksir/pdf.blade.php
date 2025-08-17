<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SK TAKSIR TANAH</title>
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

    <h4 style="text-align:center; text-decoration: underline; margin-bottom:0;">SURAT KETERANGAN HARGA TAKSIR TANAH</h4>
    <p style="text-align:center; margin-top:0;">Nomor: {{ $record->nomor_surat }}</p>

    <div class="content">
        <p>Yang bertanda tangan di bawah ini :</p>
        <table>
            <tr>
                <td>1.</td>
                <td>Nama</td>
                <td>: WURYATNO</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Jabatan</td>
                <td>: Kepala Desa</td>
            </tr>
        </table>

        <p>Dengan ini menerangkan bahwa :</p>
        <table>
            <tr>
                <td>1.</td>
                <td>Jenis Sertifikat</td>
                <td>: {{ $record->jenis_sertifikat }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Nomor Sertifikat</td>
                <td>: {{ $record->nomor_sertifikat }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Terletak di</td>
                <td>: {{ $record->letak_tanah }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Berupa tanah</td>
                <td>: {{ $record->berupa_tanah }}</td>
            </tr>
        </table>

        <p>Tanah tersebut adalah benar-benar atas nama dari :</p>
        <table>
            <tr>
                <td>1.</td>
                <td>Atas Nama</td>
                <td>: {{ $record->name }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Alamat</td>
                <td>: {{ $record->alamat }}</td>
            </tr>
        </table>

        <p>Dan berbatasan dengan tanah-tanah milik :</p>
        <table>
            <tr>
                <td>1.</td>
                <td>Utara</td>
                <td>: {{ $record->batas_utara }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Selatan</td>
                <td>: {{ $record->batas_selatan }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Timur</td>
                <td>: {{ $record->batas_timur }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Barat</td>
                <td>: {{ $record->batas_barat }}</td>
            </tr>
        </table>

        <p>Keterangan taksir harga atas tanah dan bangunan :</p>
        <table>
            <tr>
                <td>1.</td>
                <td>Harga tanah per m²</td>
                <td>: Rp {{ number_format($record->harga_tanah_per_m, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Luas tanah</td>
                <td>: {{ $record->luas_tanah }} m²</td>
            </tr>
            <tr>
                <td></td>
                <td><strong>Harga total tanah</strong></td>
                <td>= Rp {{ number_format($record->harga_tanah_per_m * $record->luas_tanah, 0, ',', '.') }}</td>
            </tr>

            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Harga bangunan per m²</td>
                <td>: Rp {{ number_format($record->harga_bangunan_per_m, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Luas bangunan</td>
                <td>: {{ $record->luas_bangunan }} m²</td>
            </tr>
            <tr>
                <td></td>
                <td><strong>Harga total bangunan</strong></td>
                <td>= Rp {{ number_format($record->harga_bangunan_per_m * $record->luas_bangunan, 0, ',', '.') }}</td>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><strong>Harga Total Tanah dan Bangunan</strong></td>
                <td><strong>= Rp
                        {{ number_format(
                ($record->harga_tanah_per_m * $record->luas_tanah) + 
                ($record->harga_bangunan_per_m * $record->luas_bangunan), 
                0, ',', '.') }}
                    </strong></td>
            </tr>
        </table>

        <p>Demikian surat keterangan ini kami buat dengan sebenarnya, agar dipergunakan sebagaimana mestinya.</p>
    </div>

    <div class="ttd">
        Pokoh Kidul, {{ \Carbon\Carbon::parse($record->created_at)->translatedFormat('d F Y') }} <br>
        Kepala Desa Pokoh Kidul<br><br><br><br>
        <strong><u>WURYATNO</u></strong>
    </div>
</body>

</html>