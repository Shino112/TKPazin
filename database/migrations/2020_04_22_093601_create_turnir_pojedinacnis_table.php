<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnirPojedinacnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnir_pojedinacnis', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->bigInteger('sezona_id')->unsigned();
            $table->foreign('sezona_id')->references('id')->on('sezonas')->onDelete('cascade');
            $table->longtext('zdrijeb')->nullable();
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
        Schema::dropIfExists('turnir_pojedinacnis');
    }
}
