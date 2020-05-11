<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNastupPiramidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nastup_piramidas', function (Blueprint $table) {
            $table->bigInteger('turnir_piramida_id')->unsigned();
            $table->bigInteger('igrac_id')->unsigned();
            $table->foreign('turnir_piramida_id')->references('id')->on('turnir_piramidas')->onDelete('cascade');
            $table->foreign('igrac_id')->references('id')->on('igracs')->onDelete('cascade');
            $table->primary(['turnir_piramida_id', 'igrac_id']);
            $table->integer('bodovi')->nullable();
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
        Schema::dropIfExists('nastup_piramidas');
    }
}
