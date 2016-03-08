<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->string('direccion', 100);
            $table->datetime('fecha');
            $table->timestamps();

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
        if (!Schema::hasTable('eventos')) return;
        Schema::table('eventos', function ($table) {
            $table->dropForeign('eventos_usuario_id_foreign');
        });
        Schema::drop('eventos');
    }
}
