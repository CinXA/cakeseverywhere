<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_sucursales', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('fk_id_producto');
            $table->unsignedBigInteger('fk_id_sucursal');

            $table->foreign('fk_id_producto')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fk_id_sucursal')
                ->references('id')
                ->on('sucursales')
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
        Schema::dropIfExists('productos_sucursales');
    }
}
