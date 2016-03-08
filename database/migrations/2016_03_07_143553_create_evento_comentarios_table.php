<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_comentarios', function(Blueprint $table){

            $table->increments('id');
            $table->integer('evento_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('evento_id')->references('id')->on('eventos');
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
        if(!Schema::hasTable('evento_comentarios')) return;
        Schema::table('evento_comentarios', function($table){
            $table->dropForeign('evento_comentarios_evento_id_foreign');
            $table->dropForeign('evento_comentarios_usuario_id_foreign');
        });

        Schema::drop('evento_comentarios');
    }
}
