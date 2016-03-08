<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion_comentarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('publicacion_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('publicacion_id')->references('id')->on('publicaciones');
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
        if(!Schema::hasTable('publicacion_comentarios')) return;
        Schema::table('publicacion_comentarios', function($table) {
            $table->dropForeign('publicacion_comentarios_publicacion_id_foreign');
            $table->dropForeign('publicacion_comentarios_usuario_id_foreign');
        });
        Schema::drop('publicacion_comentarios');
    }
}
