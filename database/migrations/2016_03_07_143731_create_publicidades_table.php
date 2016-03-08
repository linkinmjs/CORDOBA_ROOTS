<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->string('web', 100);
            $table->date('fecha_vencimiento');
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
        if(!Schema::hasTable('publicidades')) return;
        Schema::table('publicidades', function($table) {
            $table->dropForeign('publicidades_usuario_id_foreign');
        });

        Schema::drop('publicidades');
    }
}
