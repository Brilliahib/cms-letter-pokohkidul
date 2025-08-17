<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Formulir Pencatatan Sipil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #000;
            padding: 4px;
            vertical-align: top;
        }

        .no-border td {
            border: none;
        }

        .section-title {
            font-weight: bold;
            text-align: center;
            padding: 6px;
        }

        .center-table td {
            text-align: center;
        }

        .center-table td:last-child {
            text-align: right;
        }

        .checkbox-grid {
            width: 100%;
            border-collapse: collapse;
        }

        .checkbox-grid td {
            border: none;
            padding: 3px 8px;
            width: 50%;
        }

        h3 {
            margin: 10px 0 5px 0;
            font-size: 14px;
        }

        .space-ttd {
            margin-top: 8rem;
            display: block;
        }

        .underline {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div style="position: relative; width: 100%;">
        <div style="position: absolute; top: 0; right: 0; font-weight: bold; border: 2px solid #000; padding: 5px 15px; background: #fff;">
            F-2.01
        </div>


        <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <table style="text-align: left;">
                <tr class="no-border">
                    <td>Provinsi</td>
                    <td>: JAWA TENGAH</td>
                </tr>
                <tr class="no-border">
                    <td>Kabupaten/Kota</td>
                    <td>: WONOGIRI</td>
                </tr>
                <tr class="no-border">
                    <td>Kecamatan</td>
                    <td>: WONOGIRI</td>
                </tr>
                <tr class="no-border">
                    <td>Desa/Kelurahan</td>
                    <td>: POKOH KIDUL</td>
                </tr>
                <tr class="no-border">
                    <td>Kode Wilayah</td>
                    <td>: 331212004</td>
                </tr>
            </table>
        </div>
    </div>

    <p style="text-align:center; font-weight:bold; margin: 8px 0;">
        <u>FORMULIR PELAPORAN PENCATATAN SIPIL DIDALAM WILAYAH NKRI</u><br>
        Nomor: {{$record->nomor_surat}}
    </p>

    <h3>Jenis Pelaporan Pencatatan Sipil (Centang)</h3>
    <table class="checkbox-grid">
        <tr>
            <td><input type="checkbox"> Kelahiran</td>
            <td><input type="checkbox"> Pengakuan Anak</td>
        </tr>
        <tr>
            <td><input type="checkbox"> Lahir Mati</td>
            <td><input type="checkbox"> Pengesahan Anak</td>
        </tr>
        <tr>
            <td><input type="checkbox"> Perkawinan</td>
            <td><input type="checkbox"> Perubahan Nama</td>
        </tr>
        <tr>
            <td><input type="checkbox"> Pembatalan Perkawinan</td>
            <td><input type="checkbox"> Perubahan Status Kewarganegaraan</td>
        </tr>
        <tr>
            <td><input type="checkbox"> Perceraian</td>
            <td><input type="checkbox"> Pencatatan Peristiwa Penting Lainnya</td>
        </tr>
        <tr>
            <td><input type="checkbox"> Pembatalan Perceraian</td>
            <td><input type="checkbox"> Pembetulan Akta</td>
        </tr>
        <tr>
            <td><input type="checkbox" checked> Kematian</td>
            <td><input type="checkbox"> Pembatalan Akta</td>
        </tr>
        <tr>
            <td><input type="checkbox"> Pengakuan Anak</td>
            <td><input type="checkbox"> Pelaporan Pencatatan Sipil dari Luar Wilayah NKRI</td>
        </tr>
    </table>

    <h3>DATA PELAPOR</h3>
    <table>
        <tr>
            <td style="width:25%;">Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Dokumen Perjalanan*</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>DATA SUBJEK AKTA KESATU</h3>
    <table>
        <tr>
            <td style="width:25%;">Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Dokumen Perjalanan*</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>DATA SUBJEK AKTA KEDUA (JIKA ADA)</h3>
    <table>
        <tr>
            <td style="width:25%;">Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Dokumen Perjalanan*</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>DATA SAKSI I</h3>
    <table>
        <tr>
            <td style="width:30%;">Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Dokumen Perjalanan*</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>DATA SAKSI II</h3>
    <table>
        <tr>
            <td style="width:30%;">Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Dokumen Perjalanan*</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>DATA ORANG TUA <span style="font-size:12px;">(hanya diisi untuk keperluan pencatatan kelahiran, lahir mati dan kematian)</span></h3>
    <table>
        <tr>
            <td style="width:30%;">Nama Ayah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK Ayah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Tempat Lahir Ayah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Tanggal Lahir Ayah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan Ayah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>:</td>
        </tr>
        <tr>
            <td>NIK Ibu</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Tempat Lahir Ibu</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Tanggal Lahir Ibu</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Kewarganegaraan Ibu</td>
            <td>:</td>
        </tr>
    </table>

    <h3>DATA ANAK</h3>
    <table>
        <tr>
            <td>1. Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Jenis Kelamin</td>
            <td>: </td>
        </tr>
        <tr>
            <td>3. Tempat Dilahirkan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Tempat Kelahiran</td>
            <td>: </td>
        </tr>
        <tr>
            <td>5. Hari dan Tanggal Lahir</td>
            <td>: </td>
        </tr>
        <tr>
            <td>6. Pukul</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Jenis Kelahiran</td>
            <td>: </td>
        </tr>
        <tr>
            <td>8. Kelahiran Ke</td>
            <td>: </td>
        </tr>
        <tr>
            <td>9. Penolong Kelahiran</td>
            <td>: </td>
        </tr>
        <tr>
            <td>10. Berat Bayi</td>
            <td>:</td>
        </tr>
        <tr>
            <td>11. Panjang Bayi</td>
            <td>: </td>
        </tr>
    </table>

    <h3>YANG LAHIR MATI</h3>
    <table>
        <tr>
            <td>1. Lamanya Dalam Kandungan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Jenis Kelamin</td>
            <td>: </td>
        </tr>
        <tr>
            <td>3. Tanggal Lahir Mati</td>
            <td>: </td>
        </tr>
        <tr>
            <td>4. Jenis Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Anak ke</td>
            <td>: </td>
        </tr>
        <tr>
            <td>6. Tempat di Lahirkan</td>
            <td>: </td>
        </tr>
        <tr>
            <td>7. Penolongan Kelahiran</td>
            <td>: </td>
        </tr>
        <tr>
            <td>8. Sebab Lahir Mati</td>
            <td>: </td>
        </tr>
        <tr>
            <td>9. Yang Menentukan</td>
            <td>: </td>
        </tr>
        <tr>
            <td>10. Tempat Kelahiran</td>
            <td>: </td>
        </tr>
    </table>


    <h3>PERKAWINAN ATAU PEMBATALAN PERKAWINAN</h3>
    <table>
        <tr>
            <td style="width:40%;">1. NIK Ayah dari Suami</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nama Ayah dari Suami</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. NIK Ibu dari Suami</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Nama Ibu dari Suami</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. NIK Ayah dari Istri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Nama Ayah dari Istri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. NIK Ibu dari Istri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. Nama Ibu dari Istri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>9. Status Perkawinan Sebelum Kawin</td>
            <td>:</td>
        </tr>
        <tr>
            <td>10. Perkawinan yang Ke-</td>
            <td>:</td>
        </tr>
        <tr>
            <td>11. Istri yang Ke- (bagi yang poligami)</td>
            <td>:</td>
        </tr>
        <tr>
            <td>12. Tanggal Pemberkatan Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>13. Tanggal Melapor</td>
            <td>:</td>
        </tr>
        <tr>
            <td>14. Jam Pelaporan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>15. Agama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>16. Kepercayaan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>17. Nama Organisasi Kepercayaan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>18. Nama Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>19. Nomor Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>20. Tanggal Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>21. Nama Pemuka Agama/Kepercayaan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>22. Nomor Surat Izin dari Perwakilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>23. Nomor Paspor</td>
            <td>:</td>
        </tr>
        <tr>
            <td>24. Perjanjian Perkawinan Dibuat oleh Notaris</td>
            <td>:</td>
        </tr>
        <tr>
            <td>25. Nomor Akta Notaris</td>
            <td>:</td>
        </tr>
        <tr>
            <td>26. Tanggal Akta Notaris</td>
            <td>:</td>
        </tr>
        <tr>
            <td>27. Jumlah Anak (jika ada agar mengisi formulir tambahan nama anak dan akta kelahiran anak)</td>
            <td>:</td>
        </tr>
    </table>

    <h3>BAGI PEMOHON PEMBATALAN PERKAWINAN HARAP MENGISI DATA DIBAWAH INI :</h3>
    <table>
        <tr>
            <td style="width:40%;">1. Tanggal Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nomor Akta Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Tanggal Akta Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Nama Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Nomor Putusan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Tanggal Putusan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Tanggal Pelaporan Perkawinan di Luar Negeri</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PERCERAIAN ATAU PEMBATALAN PERCERAIAN</h3>
    <p><i>Yang mengajukan perceraian/pembatalan perceraian***</i></p>
    <table>
        <tr>
            <td style="width:45%;">1. Nomor Akta Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Tanggal Akta Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Nama Panggilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Tanggal Putusan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Nomor Putusan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Nomor Surat Keterangan Panitera Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Tanggal Surat Keterangan Panitera Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. Tanggal Melapor</td>
            <td>:</td>
        </tr>
    </table>

    <h4>Bagi Pemohon Pembatalan Perceraian Harap Mengisi Data dibawah ini:</h4>
    <table>
        <tr>
            <td style="width:45%;">1. Nomor Akta Perceraian</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Tanggal Akta Perceraian</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Tanggal Pelaporan Perceraian Luar Negeri</td>
            <td>:</td>
        </tr>
    </table>

    <h3>KEMATIAN</h3>
    <table>
        <tr>
            <td style="width:35%;">1. NIK</td>
            <td>: {{$record->nik}}</td>
        </tr>
        <tr>
            <td>2. Nama Lengkap</td>
            <td>: {{$record->nama_lengkap}}</td>
        </tr>
        <tr>
            <td>3. Anak Ke</td>
            <td>: {{$record->anak_ke}}</td>
        </tr>
        <tr>
            <td>4. Tanggal Kematian</td>
            <td>: {{ \Carbon\Carbon::parse($record->tanggal_kematian)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>5. Pukul</td>
            <td>: {{ \Carbon\Carbon::parse($record->pukul)->format('H:i') }} WIB</td>
        </tr>
        <tr>
            <td>6. Sebab Kematian</td>
            <td>: {{$record->sebab_kematian}}</td>
        </tr>
        <tr>
            <td>7. Tempat Kematian</td>
            <td>: {{$record->tempat_kematian}}</td>
        </tr>
        <tr>
            <td>8. Yang Menerangkan</td>
            <td>: {{$record->yang_menerangkan}}</td>
        </tr>
    </table>

    <h3>PENGANGKATAN ANAK</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Nama Anak Angkat</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nomor Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Dinas Kabupaten/Kota yang Menerbitkan Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Nama Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. NIK Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Kewarganegaraan Ibu</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. Nama Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>9. NIK Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>10. Kewarganegaraan Ayah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>11. Nama Ibu Angkat</td>
            <td>:</td>
        </tr>
        <tr>
            <td>12. NIK Ibu Angkat</td>
            <td>:</td>
        </tr>
        <tr>
            <td>13. Nomor Paspor</td>
            <td>:</td>
        </tr>
        <tr>
            <td>14. Nama Ayah Angkat</td>
            <td>:</td>
        </tr>
        <tr>
            <td>15. NIK Ayah Angkat</td>
            <td>:</td>
        </tr>
        <tr>
            <td>16. Nomor Paspor</td>
            <td>:</td>
        </tr>
        <tr>
            <td>17. Nama Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>18. Tanggal Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>19. Nomor Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>20. Nama Lembaga Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>21. Tempat Lembaga Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PENGAKUAN ANAK</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Tanggal/Bulan/Tahun Kelahiran Anak</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Tanggal/Bulan/Tahun Perkawinan Agama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Nomor Tanggal/Bulan/Tahun Akta Perkawinan/Buku Nikah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Nama Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. NIK Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. Kewarganegaraan Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>9. Nama Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>10. NIK Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>11. Kewarganegaraan Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>12. Nomor Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>13. Tanggal Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>14. Nama Lembaga Pengadilan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PENGESAHAN ANAK</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Nomor Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Tanggal/Bulan/Tahun Kelahiran Anak</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Tanggal/Bulan/Tahun Kelahiran Anak</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Tanggal/Bulan/Tahun Perkawinan Agama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Nomor Tanggal/Bulan/Tahun Akta Perkawinan/Buku Nikah</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Nama Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. NIK Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>9. Kewarganegaraan Ibu Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>10. Nama Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>11. NIK Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>12. Kewarganegaraan Ayah Kandung</td>
            <td>:</td>
        </tr>
        <tr>
            <td>13. Nomor Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>14. Tanggal Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>15. Nama Lembaga Pengadilan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PERUBAHAN NAMA</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Nama Lama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nama Baru</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Nomor Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Nama Ayah/Ibu/Wali (bagi yang dibawah umur)</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. NIK Ayah/Ibu/Wali</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Kewarganegaraan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Nomor Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. Tanggal Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>9. Nama Lembaga Pengadilan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PERUBAHAN STATUS KEWARGANEGARAAN</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Kewarganegaraan Baru</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nomor Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Nomor Akta Perkawinan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Nama Suami atau Istri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. NIK Suami atau Istri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Nomor Paspor</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. Nomor Afdavit</td>
            <td>:</td>
        </tr>
        <tr>
            <td>8. Nomor Keputusan Presiden</td>
            <td>:</td>
        </tr>
        <tr>
            <td>9. Tanggal/Bulan/Tahun</td>
            <td>:</td>
        </tr>
        <tr>
            <td>10. Nomor Berita Acara Sumpah/Janji Setia</td>
            <td>:</td>
        </tr>
        <tr>
            <td>11. Nama Jabatan yang menerbitkan BAS/Janji Setia</td>
            <td>:</td>
        </tr>
        <tr>
            <td>12. Tanggal/Bulan/Tahun</td>
            <td>:</td>
        </tr>
        <tr>
            <td>13. Nomor Keputusan Menteri</td>
            <td>:</td>
        </tr>
        <tr>
            <td>14. Tanggal/Bulan/Tahun</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PERUBAHAN PERISTIWA PENTING LAINNYA</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Nomor Akta Kelahiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Jenis Kelamin Lama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Jenis Kelamin Baru</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Nomor Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Tanggal Penetapan Pengadilan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Nama Lembaga Pengadilan</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PEMBETULAN AKTA (Hilang/ Rusak)</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Nomor Akta yang akan Dibetulkan/ ditarik</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nama</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. NIK</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Anak Ke</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. Nama Ayah/ Ibu/ Wali</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. NIK Ayah/ Ibu/ Wali</td>
            <td>:</td>
        </tr>
        <tr>
            <td>7. No. Surat Hilang/ Rusak</td>
            <td>:</td>
        </tr>
    </table>

    <h3>PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI</h3>
    <table>
        <tr>
            <td style="width:45%;">1. Jenis Peristiwa Penting</td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Nomor Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI</td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI</td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Kantor Perwakilan yang Melakukan Pencatatan</td>
            <td>:</td>
        </tr>
        <tr>
            <td>5. No Bukti Pencatatan Sipil dari Negara Setempat</td>
            <td>:</td>
        </tr>
        <tr>
            <td>6. Tanggal Penerbitan dari Negara Setempat</td>
            <td>:</td>
        </tr>
    </table>

    <!-- Bagian tanda tangan -->
    <table class="no-border" style="width:100%; text-align:center;">
        <tr>
            <td class="no-border" style="width:50%;">
                Mengetahui,<br>
                SEKRETARIS DESA<br>
                U.B<br>
                KASI PEMERINTAHAN
                <span class="space-ttd"></span>
                <span class="underline"><b>ARIS AGUNG SETIA NUGROHO</b></span>
            </td>
            <td class="no-border" style="width:50%;">
                Pokoh Kidul, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
                Pelapor
                <span class="space-ttd"></span>
                <span class="underline">.......................................</span>
            </td>
        </tr>
    </table>
</body>

</html>