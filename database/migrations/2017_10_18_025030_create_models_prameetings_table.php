<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsPrameetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_prameetings', function (Blueprint $table) {
            $table->increments('id');
            $table->char('dok_risalah_prameeting');
            $table->text('bws_prameeting');
            $table->text('direktorat_prameeting');
            $table->text('narasumber_prameeting');
            $table->char('dok_konsultan_prameeting');
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
        Schema::dropIfExists('models_prameetings');
    }
}
