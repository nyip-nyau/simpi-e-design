<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_dokumens', function (Blueprint $table) {
            $table->increments('id');
            $table->char('pendahuluan_dokumen');
            $table->char('interim_dokumen');
            $table->char('draft_akhir_dokumen');
            $table->char('akhir_dokumen');
            $table->char('desain_dokumen');
            $table->char('hidrologi_dokumen');
            $table->char('sosial_ekonomi_dokumen');
            $table->char('topografi_dokumen');
            $table->char('geologi_teknik_dokumen');
            $table->char('nota_desain_dokumen');
            $table->char('larap_dokumen');
            $table->char('lingkungan_dokumen');
            $table->integer('pengajuan_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_dokumens');
    }
}
