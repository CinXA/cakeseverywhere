<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoClasificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_clasificaciones', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nombre_clasificacion');
            $table->boolean('status')->default(0);
            $table->string('desc_clasi');
            //$table->date('fecha_registro');
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
        Schema::dropIfExists('producto_clasificaciones');
    }
}
