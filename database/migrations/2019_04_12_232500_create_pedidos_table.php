<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_aprox_entrega');
            $table->unsignedBigInteger('fk_id_usuarios');
            $table->unsignedBigInteger('fk_id_status_pedidos');
            $table->unsignedBigInteger('fk_id_direcciones_entregas');
            $table->timestamps();
            $table->foreign('fk_id_usuarios')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_id_status_pedidos')
                ->references('id')
                ->on('status_pedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_id_direcciones_entregas')
                ->references('id')
                ->on('direcciones_entregas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
