<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSorteoComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteo_comentarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('sorteo_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('sorteo_id')->references('id')->on('sorteos');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(!Schema::hasTable('sorteo_comentarios')) return;
        Schema::table('sorteo_comentarios', function($table) {
            $table->dropForeign('sorteo_comentarios_sorteo_id_foreign');
            $table->dropForeign('sorteo_comentarios_usuario_id_foreign');
        });
        Schema::drop('sorteo_comentarios');
    }
}
