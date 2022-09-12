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
            'judul' => 'Madiun Lor adalah sebuah kelurahan di wilayah Kecamatan Manguharjo, Kota Madiun, Provinsi Jawa Timur. 
                            Di kelurahan inilah berada hampir semua kantor instansi pemerintah. Inka sebagai kebanggaan Indonesia yang memproduksi kereta 
                            api baik untuk kebutuhan domestik maupun ekspor ada di wilayah ini...',
            'isi' => '',
            'foto' => 'img/inka.jpg'
            ]
        ]);
    }
}
