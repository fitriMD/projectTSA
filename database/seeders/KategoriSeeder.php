<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            ['nama' => 'KK',
            'keterangan' => 'Pembuatan dokumen KK'],
            ['nama' => 'KTP',
            'keterangan' => 'Pembuatan dokumen KTP'],
        ]);
    }
}
