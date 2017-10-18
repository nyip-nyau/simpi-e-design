<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsKontributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_kontributors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('narasumber_id');
            $table->integer('bws_id');
            $table->integer('direktorat_id');
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
        Schema::dropIfExists('models_kontributors');
    }
}
