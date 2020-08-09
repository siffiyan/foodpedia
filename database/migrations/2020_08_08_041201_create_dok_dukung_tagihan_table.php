<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokDukungTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dok_dukung_tagihan', function (Blueprint $table) {
            $table->bigIncrements('id_dok_dukungan_tagihan');
            $table->string('nama_dok_duk_tagihan', 50);
            $table->string('status_dok_duk_tagihan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dok_dukung_tagihan');
    }
}
