<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactus')->insert([
            [
            'nama' => 'Devi Puspitasari',
            'email' => 'puspitasaridevi@gmail.com',
            'tlp' => '0858400803',
            'pesan' => 'Semoga website ini semakin berkembang, sehingga dapat bermanfaat untuk Kota Madiun'
            ]
        ]);
    }
}
