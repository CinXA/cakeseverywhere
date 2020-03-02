<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fk_id_pedidos');
            $table->unsignedBigInteger('fk_id_status_pedidos');
            $table->timestamps();
            $table->foreign('fk_id_pedidos')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_id_status_pedidos')
                ->references('id')
                ->on('status_pedidos')
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
        Schema::dropIfExists('historial_pedidos');
    }
}
