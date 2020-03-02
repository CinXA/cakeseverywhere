<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusPedidoHasCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_pedido_has_cargos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fk_id_status_pedidos');
            $table->unsignedBigInteger('fk_id_cargos');
            $table->timestamps();
            $table->foreign('fk_id_status_pedidos')
                ->references('id')
                ->on('status_pedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_id_cargos')
                ->references('id')
                ->on('cargos')
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
        Schema::dropIfExists('status_pedido_has_cargos');
    }
}
