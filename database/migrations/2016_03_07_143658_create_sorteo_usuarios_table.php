<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSorteoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteo_usuarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('sorteo_id')->unsigned();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('sorteo_id')->references('id')->on('sorteos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(!Schema::hasTable('sorteo_usuarios')) return;
        Schema::table('sorteo_usuarios', function($table) {
            // $table->dropForeign('sorteo_usuarios_usuario_id_foreign');
            // $table->dropForeign('sorteo_usuarios_sorteo_id_foreign');
        });
        Schema::drop('sorteo_usuarios');
    }
}
