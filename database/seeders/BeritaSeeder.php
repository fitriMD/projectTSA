<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            ['judul_berita' => 'Gebyar HUT',
            'tgl_berita' => '2022-09-07',
            'isi' => 'Kegiatan HUT Kelurahan Madiun Lor berlangsung meriah',
            'gambar' => 'img/inka.jpg'],

            ['judul_berita' => 'Penyaluran BLTD',
            'tgl_berita' => '2022-09-07',
            'isi' => 'Kegiatan HUT Kelurahan Madiun Lor berlangsung meriah',
            'gambar' => 'img/inka.jpg'],

            ['judul_berita' => 'Kirab Budaya',
            'tgl_berita' => '2022-09-07',
            'isi' => 'Kegiatan HUT Kelurahan Madiun Lor berlangsung meriah',
            'gambar' => 'img/inka.jpg'],
        ]);
    }
}
