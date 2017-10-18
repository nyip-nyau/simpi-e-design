<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsPremeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_premeetings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('narasumber_premeeting');
            $table->text('bws_premeeting');
            $table->text('direktorat_premeeting');
            $table->char('dok_premeeting');
            $table->char('dok_konsultan_premeeting');
            $table->text('konsultan_premeeting');
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
        Schema::dropIfExists('models_premeetings');
    }
}
