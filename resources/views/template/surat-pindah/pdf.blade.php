<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>FORMULIR PENDAFTARAN PERPINDAHAN PENDUDUK</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 10mm;
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

        .b2 {
            border: 2px solid #000;
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

        .mt6 {
            margin-top: 6px;
        }

        .mt10 {
            margin-top: 10px;
        }

        .p4 {
            padding: 4px 6px;
        }

        .p6 {
            padding: 6px 8px;
        }

        .p0 {
            padding: 0;
        }

        /* header atas */
        .headbar {
            display: grid;
            grid-template-columns: 1fr 70px;
            align-items: stretch;
        }

        .head-title {
            text-decoration: underline;
            border-right: none;
            text-align: center;
            padding: 6px 8px;
            font-weight: 800;
            font-size: 14pt;
        }

        .head-code {
            border: 2px solid #000;
            text-align: center;
            padding: 6px 8px;
            font-weight: 700;
        }

        /* tabel utama nomor-label-nilai */
        .main .no {
            width: 30px;
            text-align: center;
        }

        .main .label {
            width: 260px;
        }

        .main td {
            padding: 4px 6px;
        }

        /* sub alamat (baris a,b,c,...) */
        .subtbl td {
            padding: 4px 6px;
        }

        .mini {
            min-width: 82px;
            display: inline-block;
            border: 1px solid #000;
            padding: 2px 6px;
            text-align: center;
        }

        .mini-wide {
            min-width: 180px;
            display: inline-block;
            border: 1px solid #000;
            padding: 2px 6px;
        }

        .mini-rt {
            min-width: 70px;
            display: inline-block;
            border: 1px solid #000;
            padding: 2px 6px;
            text-align: center;
        }

        /* tabel daftar anggota pindah */
        .anggota thead th {
            border: 1px solid #000;
            padding: 6px 8px;
            background: #efefef;
        }

        .anggota tbody td {
            border: 1px solid #000;
            padding: 6px 8px;
            height: 22px;
        }

        .w-nik {
            width: 32%;
        }

        .w-nama {
            width: 48%;
        }

        .w-shdk {
            width: 20%;
        }

        .w-no {
            width: 5%;
        }

        /* checkbox kecil */
        .cb {
            display: inline-block;
            width: 10px;
            height: 10px;
            border: 1px solid #000;
            margin-right: 4px;
            vertical-align: middle;
        }

        .cb.checked::after {
            content: "";
            display: block;
            width: 6px;
            height: 6px;
            margin: 1px;
            background: #000;
        }

        /* blok kecil judul bagian */
        .sect-title {
            font-weight: 700;
            padding: 4px 6px;
            border: 1px solid #000;
            background: #efefef;
        }

        /* tanda tangan */
        .ttd-area td {
            border: none;
            padding-top: 10px;
        }

        .spacer {
            height: 58px;
        }

        .line {
            display: inline-block;
            min-width: 260px;
            border-bottom: 1px solid #000;
        }
    </style>
</head>

<body>


    {{-- HEADER --}}
    <div class="headbar">
        <div class="head-title">FORMULIR PENDAFTARAN PERPINDAHAN PENDUDUK</div>
    </div>
    <div class="center mt6">Nomor : {{ $record->nomor_surat ?? '' }}</div>

    {{-- TABEL UTAMA --}}
    <table class="main mt10">
        <tr class="b1">
            <td class="no b1">1.</td>
            <td class="label b1">No. KK</td>
            <td class="b1">{{ $record->no_kk ?? '' }}</td>
        </tr>
        <tr class="b1">
            <td class="no b1">2.</td>
            <td class="label b1">Nama Lengkap Pemohon</td>
            <td class="b1">{{ strtoupper($record->nama_lengkap ?? '') }}</td>
        </tr>
        <tr class="b1">
            <td class="no b1">3.</td>
            <td class="label b1">NIK</td>
            <td class="b1">{{ $record->nik ?? '' }}</td>
        </tr>
        <tr class="b1">
            <td class="no b1">4.</td>
            <td class="label b1">Jenis Permohonan</td>
            <td class="b1">{{ $record->jenis_permohonan ?? 'Surat Keterangan Pindah' }}</td>
        </tr>

        {{-- 5. ALAMAT ASAL --}}
        <tr class="b1">
            <td class="no b1">5.</td>
            <td class="label b1">Alamat Asal</td>
            <td class="b1 p0">
                <table class="subtbl" style="width:100%;">
                    <tr>
                        <td class="b1" style="width:22px;">a.</td>
                        <td class="b1" style="width:150px;">Desa/Kelurahan</td>
                        <td class="b1"><span class="mini-wide">{{ strtoupper($record->desa_kelurahan_asal ?? '') }}</span></td>
                        <td class="b1" style="width:22px;">RT</td>
                        <td class="b1"><span class="mini-rt">{{ $record->rt_asal ?? '' }}</span></td>
                        <td class="b1" style="width:22px;">RW</td>
                        <td class="b1"><span class="mini-rt">{{ $record->rw_asal ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td class="b1">b.</td>
                        <td class="b1">Kecamatan</td>
                        <td class="b1"><span class="mini-wide">{{ strtoupper($record->kecamatan_asal ?? '') }}</span></td>
                        <td class="b1">Kabupaten/Kota</td>
                        <td class="b1" colspan="3"><span class="mini-wide">{{ strtoupper($record->kabupaten_kota_asal ?? '') }}</span></td>
                    </tr>
                    <tr>
                        <td class="b1">c.</td>
                        <td class="b1">Kode Pos</td>
                        <td class="b1"><span class="mini">{{ $record->kodepos_asal ?? '' }}</span></td>
                        <td class="b1">Provinsi</td>
                        <td class="b1" colspan="3"><span class="mini-wide">{{ strtoupper($record->provinsi_asal ?? '') }}</span></td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="b1">
            <td class="no b1">6.</td>
            <td class="label b1">Klasifikasi Kepindahan</td>
            <td class="b1">{{ $record->klasifikasi_kepindahan ?? '' }}</td>
        </tr>

        {{-- 7. ALAMAT PINDAH --}}
        <tr class="b1">
            <td class="no b1">7.</td>
            <td class="label b1">Alamat Pindah</td>
            <td class="b1 p0">
                <table class="subtbl" style="width:100%;">
                    <tr>
                        <td class="b1" style="width:22px;">a.</td>
                        <td class="b1" style="width:150px;">Desa/Kelurahan</td>
                        <td class="b1"><span class="mini-wide">{{ strtoupper($record->desa_kelurahan_pindah ?? '') }}</span></td>
                        <td class="b1" style="width:22px;">RT</td>
                        <td class="b1"><span class="mini-rt">{{ $record->rt_pindah ?? '' }}</span></td>
                        <td class="b1" style="width:22px;">RW</td>
                        <td class="b1"><span class="mini-rt">{{ $record->rw_pindah ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td class="b1">b.</td>
                        <td class="b1">Kecamatan</td>
                        <td class="b1"><span class="mini-wide">{{ strtoupper($record->kecamatan_pindah ?? '') }}</span></td>
                        <td class="b1">Kabupaten/Kota</td>
                        <td class="b1" colspan="3"><span class="mini-wide">{{ strtoupper($record->kabupaten_kota_pindah ?? '') }}</span></td>
                    </tr>
                    <tr>
                        <td class="b1">c.</td>
                        <td class="b1">Kode Pos</td>
                        <td class="b1"><span class="mini">{{ $record->kodepos_pindah ?? '' }}</span></td>
                        <td class="b1">Provinsi</td>
                        <td class="b1" colspan="3"><span class="mini-wide">{{ strtoupper($record->provinsi_pindah ?? '') }}</span></td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="b1">
            <td class="no b1">8.</td>
            <td class="label b1">Alasan Pindah</td>
            <td class="b1">{{ $record->alasan_pindah ?? '' }}</td>
        </tr>
        <tr class="b1">
            <td class="no b1">9.</td>
            <td class="label b1">Jenis Kepindahan</td>
            <td class="b1">{{ $record->jenis_kepindahan ?? '' }}</td>
        </tr>
        <tr class="b1">
            <td class="no b1">10.</td>
            <td class="label b1">Anggota Keluarga Tidak Pindah</td>
            <td class="b1">{{ $record->anggota_keluarga_tidak_pindah ?? '' }}</td>
        </tr>
        <tr class="b1">
            <td class="no b1">11.</td>
            <td class="label b1">Anggota Keluarga yang Pindah</td>
            <td class="b1">{{ $record->anggota_keluarga_pindah ?? '' }}</td>
        </tr>

        {{-- 12. DAFTAR ANGGOTA KELUARGA YANG PINDAH --}}
        <tr class="b1">
            <td class="no b1">12.</td>
            <td class="label b1">Daftar Anggota Keluarga yang Pindah</td>
            <td class="b1 p0">
                <table class="anggota" style="width:100%;">
                    <thead>
                        <tr>
                            <th class="w-no">NO</th>
                            <th class="w-nik">N I K</th>
                            <th class="w-nama">NAMA LENGKAP</th>
                            <th class="w-shdk">SHDK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $rows = $record->anggotas ?? [];
                        @endphp
                        @for($i=0; $i<count($rows); $i++)
                            @php $r=$rows[$i]; @endphp
                            <tr>
                            <td class="center">{{ $i+1 }}</td>
                            <td>{{ $r->nik }}</td>
                            <td>{{ strtoupper($r->name) }}</td>
                            <td class="center">{{ strtoupper($r->shdk) }}</td>
        </tr>
        @endfor
        </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </table>


    {{-- BAGIAN: ORANG ASING / SPONSOR --}}
    <div class="sect-title mt10">
        Diisi oleh Penduduk (Orang Asing) Pemegang ITAS yang Mengajukan SKTT dan OA Pemegang ITAP yang Mengajukan Surat Keterangan Kependudukan Lainnya
    </div>
    <table class="b1" style="width:100%;">
        <tr>
            <td class="b1 p4" style="width:240px;">13. Nama Sponsor</td>
            <td class="b1 p4">{{ strtoupper($record->nama_sponsor ?? '') }}</td>
        </tr>
        <tr>
            <td class="b1 p4">14. Tipe Sponsor</td>
            <td class="b1 p4">
                <span class="cb {{ !empty($record->sponsor_org) ? 'checked':'' }}"></span> Organisasi Internasional &nbsp;&nbsp;
                <span class="cb {{ !empty($record->sponsor_pemerintah) ? 'checked':'' }}"></span> Pemerintah &nbsp;&nbsp;
                <span class="cb {{ !empty($record->sponsor_perusahaan) ? 'checked':'' }}"></span> Perusahaan &nbsp;&nbsp;
                <span class="cb {{ !empty($record->sponsor_perorangan) ? 'checked':'' }}"></span> Perorangan &nbsp;&nbsp;
                <span class="cb {{ !empty($record->sponsor_tanpa) ? 'checked':'' }}"></span> Tanpa Sponsor
            </td>
        </tr>
        <tr>
            <td class="b1 p4">15. Alamat Sponsor</td>
            <td class="b1 p4">{{ strtoupper($record->alamat_sponsor ?? '') }}</td>
        </tr>
        <tr>
            <td class="b1 p4">16. Nomor dan Tanggal KITAS &amp; KITAP</td>
            <td class="b1 p4">
                Nomor: <span>{{ $record->nomor_kitas ?? '' }}</span>
                &nbsp;&nbsp; Tanggal: <span>{{ $record->tgl_kitas ?? '' }}</span>
            </td>
        </tr>
    </table>

    {{-- BAGIAN LUAR NEGERI --}}
    <div class="sect-title mt10">
        Diisi oleh Penduduk yang Mengajukan Surat Keterangan Pindah Luar Negeri
    </div>
    <table class="b1" style="width:100%;">
        <tr>
            <td class="b1 p4" style="width:240px;">17. Negara Tujuan</td>
            <td class="b1 p4">
                <span>{{ strtoupper($record->negara_tujuan ?? '') }}</span>
                &nbsp;&nbsp; Kode Negara <span>{{ $record->kode_negara ?? '' }}</span>
            </td>
        </tr>
        <tr>
            <td class="b1 p4">18. Alamat Tujuan</td>
            <td class="b1 p4">{{ strtoupper($record->alamat_tujuan ?? '') }}</td>
        </tr>
        <tr>
            <td class="b1 p4">19. Penanggung Jawab</td>
            <td class="b1 p4">{{ strtoupper($record->penanggung_jawab ?? '') }}</td>
        </tr>
        <tr>
            <td class="b1 p4">20. Pindah pada Tanggal</td>
            <td class="b1 p4">
                Tanggal <span>{{ isset($record->pindah_tanggal) ? \Carbon\Carbon::parse($record->pindah_tanggal)->format('d') : '' }}</span>
                &nbsp; Bulan <span>{{ isset($record->pindah_tanggal) ? \Carbon\Carbon::parse($record->pindah_tanggal)->format('m') : '' }}</span>
                &nbsp; Tahun <span>{{ isset($record->pindah_tanggal) ? \Carbon\Carbon::parse($record->pindah_tanggal)->format('Y') : '' }}</span>
            </td>
        </tr>
    </table>

    {{-- TANDA TANGAN --}}
    <table class="ttd-area mt10" style="width:100%;">
        <tr>
            <td class="center" style="width:40%;">
                Mengetahui,<br>
                Kepala Dinas Kependudukan dan<br>Pencatatan Sipil Kab. Wonogiri
                <div class="spacer"></div>
                <span class="line"></span><br>NIP.
            </td>
            <td class="center" style="width:35%;">
                Sekretaris Desa Pokoh Kidul<br>u.b<br>Kasi Pemerintahan
                <div class="spacer"></div>
                <span class="line"></span><br>NIP.
            </td>
            <td class="center" style="width:25%;">
                Pokoh Kidul, {{ isset($record->created_at) ? \Carbon\Carbon::parse($record->created_at)->translatedFormat('d F Y') : \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
                Pemohon
                <div class="spacer"></div>
                <span class="u bold">{{ strtoupper($record->nama_pemohon ?? $record->name ?? '') }}</span>
            </td>
        </tr>
    </table>

</body>

</html>