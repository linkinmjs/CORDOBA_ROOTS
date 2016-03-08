<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoBandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_bandas', function (Blueprint $table){
            $table->increments('id');
            $table->integer('evento_id')->unsigned();
            $table->integer('banda_id')->unsigned();
            $table->timestamps();

            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('banda_id')->references('id')->on('bandas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(!Schema::hasTable('evento_bandas')) return;
        Schema::table('evento_bandas', function ($table) {
            $table->dropForeign('evento_bandas_evento_id_foreign');
        });
        Schema::drop('evento_bandas');
    }
}
