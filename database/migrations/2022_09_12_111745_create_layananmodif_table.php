<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananmodifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {

        Schema::table('layanan', function (Blueprint $table) {

            $table->text('judul')->change();
            $table->longText('isi')->change();

        });

    }

    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

          

    }

}

