<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantesPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variantes_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Biginteger('fk_id_variante')->unsigned();
            $table->Biginteger('fk_id_status_pedido')->unsigned();
            $table->string('cantidad variantes');
            $table->float('costo');

            $table->foreign('fk_id_variante')
                ->references('id')
                ->on('variantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fk_id_status_pedido')
                ->references('id')
                ->on('status_pedidos')
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
        Schema::dropIfExists('variantes_pedidos');
    }
}
