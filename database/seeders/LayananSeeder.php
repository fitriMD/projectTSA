<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanan')->insert([
            [
            'judul' => 'Pembuatan KTP',
            'isi' => 'Surat pengantar dari RT dan RW
            Mengisi form permohonan KTP
            Melampirkan pas foto berwarna, tahun ganjil (contoh 1987) dengan latar belakang merah, (contoh 1988) untuk tahun genap dengan latar belakang biru, dan
            Fotokopi KK terbaru',
            'foto' => 'img/inka.jpg',
            'kategori_id' => '1'
            ],
            [
                'judul' => 'Pembuatan KK',
                'isi' => 'Surat pengantar RT/RW dan Kelurahan
                Mengisi Formulir Permohonan Kartu Keluarga
                Melampirkan KK dan KTP lama
                Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya
                Melampirkan fotocopy Kutipan Akta Kelahiran bagi kepala keluarga dan seluruh anggota keluarga, dengan memperlihatkan dokumen aslinya
                Mengisi Data Keluarga dan Biodata setiap Anggota Keluarga
                Melampirkan fotocopy Bukti / Ketetapan Ganti Nama (apabila sudah ganti nama), dengan memperlihatkan dokumen aslinya
                Asli Surat Keterangan Pindah Datang, bagi penduduk yang pindah tempat tinggal
                Khusus bagi penduduk WNI yang baru pindah dan datang dari luar negeri membawa Surat Keterangan Datang dari Luar Negeri',
                'foto' => 'img/inka.jpg',
                'kategori_id' => '2'
                ],

        ]);
    }
}
