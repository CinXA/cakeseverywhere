<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantesPromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variantes_promociones', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->Biginteger('fk_id_variante')->unsigned();
            $table->Biginteger('fk_id_promociones')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->foreign('fk_id_variante')
                ->references('id')
                ->on('variantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fk_id_promociones')
                ->references('id')
                ->on('promociones')
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
        Schema::dropIfExists('variantes_promociones');
    }
}
