<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('fk_id_direccion');
            $table->string('nombre_sucursal');
            $table->string('propietario');
            $table->date('fecha_registro');

            $table->foreign('fk_id_direccion')
                ->references('id')
                ->on('direcciones_sucursales')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('sucursales');
    }
}
