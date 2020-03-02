<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado');
            $table->string('municipio');
            $table->string('localidad');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('codigo_postal');
            $table->string('otras_referencias');
            $table->string('tel_fijo');
            $table->string('tel_celular');
            $table->unsignedBigInteger('fk_id_usuarios');

            $table->foreign('fk_id_usuarios')->references('id')->on('users');
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
        Schema::dropIfExists('direcciones');
    }
}
