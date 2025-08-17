<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Formulir Permohonan KTP</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 12mm;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Times New Roman", serif;
            font-size: 11pt;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            vertical-align: middle;
        }

        /* garis */
        .b1 {
            border: 1px solid #000;
        }

        .bt1 {
            border-top: 1px solid #000;
        }

        .bb1 {
            border-bottom: 1px solid #000;
        }

        .bl1 {
            border-left: 1px solid #000;
        }

        .br1 {
            border-right: 1px solid #000;
        }

        .bt2 {
            border-top: 2px solid #000;
        }

        .bb2 {
            border-bottom: 2px solid #000;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        .bold {
            font-weight: 700;
        }

        .u {
            text-decoration: underline;
        }

        .mt4 {
            margin-top: 4px;
        }

        .mt8 {
            margin-top: 8px;
        }

        .mt12 {
            margin-top: 12px;
        }

        /* kotak hijau kecil */
        .chip {
            display: inline-block;
            min-width: 18px;
            padding: 1px 4px;
            background: #b6d7a8;
            color: #000;
            border: 1px solid #000;
            text-align: center;
            font-weight: 700;
            margin-right: 6px;
        }

        /* area kode wilayah (angka hijau) */
        .code {
            background: #b6d7a8;
            border: 1px solid #000;
            padding: 2px 6px;
            min-width: 30px;
            text-align: center;
        }

        /* header judul besar dengan garis atas & bawah */
        .baris-judul {
            font-weight: 700;
            text-align: center;
            padding: 6px 0;
            text-decoration: underline;
        }

        /* --- JENIS PERMOHONAN --- */
        .jenis-wrap {
            width: 240px;
            /* bisa kamu sesuaikan */
            font-weight: 700;
        }

        .jenis-top {
            border: 2px solid #000;
        }

        .jenis-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #000;
            color: #fff;
            font-size: 10pt;
            border-bottom: 2px solid #000;
        }

        .jenis-title {
            padding: 4px 8px;
            flex: 1;
        }

        .jenis-code {
            padding: 4px 8px;
            border-left: 2px solid #000;
            background: #fff;
            color: #000;
        }

        .jenis-body {
            text-align: center;
            padding: 10px 0;
            font-size: 14pt;
            font-weight: 700;
        }

        /* kolom konten kiri-kanan untuk kesan grid excel */
        .grid-row td {
            border: 1px solid #000;
            padding: 4px 6px;
        }

        .value-line {
            border-bottom: 1px solid #000;
            height: 22px;
            padding: 2px 6px;
        }

        /* tabel TTL - Umur */
        .ttl {
            width: 360px;
        }

        .ttl th,
        .ttl td {
            border: 1px solid #000;
            padding: 6px 8px;
        }

        .ttl thead th {
            background: #efefef;
            font-weight: 700;
        }

        /* kotak kecil RT/RW/Kode Pos */
        .smallbox {
            border: 1px solid #000;
            padding: 3px 6px;
            display: inline-block;
            min-width: 90px;
            text-align: center;
        }

        /* tanda tangan kanan */
        .ttd {
            width: 360px;
        }

        .no-border {
            border: none !important;
        }

        .p-0 {
            padding: 0 !important;
            padding-top: 12px !important;
        }
    </style>
</head>

<body>

    {{-- BARIS ATAS: Wilayah & Jenis Permohonan --}}
    <table>
        <tr>
            <td style="width: 62%;">
                <table style="width:100%;">
                    <tr>
                        <td style="width: 170px;">PROVINSI</td>
                        <td style="width: 28px;">:</td>
                        <td style="padding-left:8px;">{{ $record->provinsi }}</td>
                    </tr>
                    <tr>
                        <td>KABUPATEN/KOTA</td>
                        <td>:</td>
                        <td style="padding-left:8px;">{{ $record->kabupaten_kota }}</td>
                    </tr>
                    <tr>
                        <td>KECAMATAN</td>
                        <td>:</td>
                        <td style="padding-left:8px;">{{ $record->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td>DESA/KELURAHAN</td>
                        <td>:</td>
                        <td style="padding-left:8px;">{{ $record->desa_kelurahan }}</td>
                    </tr>
                </table>
            </td>

            <td style="width: 38%; padding-left:10px;">
                <!-- Kotak Jenis Permohonan -->
                <div class="jenis-wrap">
                    <div class="jenis-top">
                        <div class="jenis-header">
                            <table style="width:100%; border-collapse: collapse;">
                                <tr>
                                    <td style="border: 1px solid black; text-align: center; font-weight: bold;">
                                        JENIS PERMOHONAN
                                    </td>
                                    <td style="width: 20%; background: white; color: black; border: 1px solid black; text-align: center; font-weight: bold;">
                                        F-121
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="jenis-body">PENGGANTIAN</div>
                    </div>
                </div>

            </td>
        </tr>
    </table>

    {{-- Judul Besar --}}
    <div class="baris-judul mt12">
        FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA
    </div>
    <div class="center mt4">Nomor : {{ $record->nomor_surat }}</div>

    {{-- Blok Data 1–4 --}}
    <table class="mt8" style="width:100%;">
        <tr class="grid-row">
            <td style="width: 240px;">
                <span>1. </span>Nama Lengkap
            </td>
            <td style="width: 12px;" class="center no-border">:</td>
            <td>
                <div>{{ strtoupper($record->name) }}</div>
            </td>
        </tr>
        <tr class="grid-row">
            <td>
                <span>2. </span>NIK Pemohon
            </td>
            <td class="center no-border">:</td>
            <td>
                <div>{{ $record->nik }}</div>
            </td>
        </tr>
        <tr class="grid-row">
            <td>
                <span>3. </span>No. KK
            </td>
            <td class="center no-border">:</td>
            <td>
                <div>{{ $record->no_kk }}</div>
            </td>
        </tr>

        {{-- Alamat (baris bertingkat) --}}
        <tr class="grid-row">
            <td>
                <span>4. </span>Alamat
            </td>
            <td class="center no-border">:</td>
            <td class="no-border p-0">
                <div class="mt4">
                    <div class="smallbox">{{ strtoupper($record->daerah) }}</div>
                    <span class="smallbox">RT. {{ str_pad($record->rt,3,'0',STR_PAD_LEFT) }}</span>
                    <span class="smallbox">RW {{ str_pad($record->rw,3,'0',STR_PAD_LEFT) }}</span>
                </div>

                <div class="mt4" style="display:flex; align-items:center; justify-content:space-between;">
                    <span class="smallbox">{{ strtoupper($record->alamat_lengkap) }}</span>
                    <span class="smallbox" style="min-width:150px;">KODE POS &nbsp;: {{ $record->kode_pos }}</span>
                </div>
            </td>
        </tr>
    </table>

    {{-- TTL & Umur + TTD Pemohon (dibikin sejajar sesuai contoh) --}}
    <table class="mt12" style="width:100%;">
        <tr>
            <!-- Kolom TTL -->
            <td style="width: 50%; vertical-align:top;">
                <table class="ttl">
                    <thead>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <th style="width: 90px;">Umur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WONOGIRI, {{ \Carbon\Carbon::parse($record->tanggal_lahir)->format('d-m-Y') }}</td>
                            <td class="center">{{ $record->umur }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <!-- Kolom TTD Pemohon -->
            <td style="width: 50%; vertical-align:top; text-align:center;">
                Pokoh Kidul, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
                Pemohon,
                <div style="height:65px;"></div> <!-- spasi utk tanda tangan -->
                <div class="u bold">{{ strtoupper($record->name) }}</div>
            </td>
        </tr>
    </table>


    {{-- Mengetahui --}}
    <table class="mt12" style="width:100%;">
        <tr>
            <td class="center" style="width:50%; border:none;">
                Mengetahui,<br>
                Camat Wonogiri,
                <div style="height:55px;"></div>
                <div style="display:inline-block; min-width:260px; border-bottom:1px solid #000;"></div><br>
                NIP.
            </td>
            <td class="center" style="width:50%; border:none;">
                Kepala Desa Pokoh Kidul,
                <div style="height:55px;"></div>
                <div class="u bold">WURYATNO</div>
            </td>
        </tr>
    </table>

</body>

</html>