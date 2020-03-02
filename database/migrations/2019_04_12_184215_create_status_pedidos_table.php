<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_articulos');
            $table->float('sub_total',10,2);
            $table->float('total',10,2);
            $table->float('iva_impuesto',5,1)->default('0.0');
            $table->float('descuento_porciento',5,1)->default('0.0');
            $table->unsignedBigInteger('fk_id_cate_status_pedidos');
            $table->timestamps();
            $table->foreign('fk_id_cate_status_pedidos')->references('id')->on('cate_status_pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_pedidos');
    }
}
