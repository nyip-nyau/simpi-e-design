<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_pengajuans', function (Blueprint $table) {
            $table->increments('id');
            $table->char('judul_pengajuan');
            $table->text('deskripsi_pengajuan');
            $table->integer('kategori_id');
            $table->integer('konsultan_id');
            $table->char('status_pengajuan');
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
        Schema::dropIfExists('models_pengajuans');
    }
}
