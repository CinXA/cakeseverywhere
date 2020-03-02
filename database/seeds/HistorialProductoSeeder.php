<?php

use Illuminate\Database\Seeder;
use App\models\ModuloProducto\historial_producto;

class HistorialProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        historial_producto::create([
            'fk_id_producto'=>'1',
            'fk_id_produclasi'=>'5'
        ]);


        historial_producto::create([
            'fk_id_producto'=>'2',
            'fk_id_produclasi'=>'6'
        ]);


        historial_producto::create([
            'fk_id_producto'=>'3',
            'fk_id_produclasi'=>'5'
        ]);

        historial_producto::create([
            'fk_id_producto'=>'4',
            'fk_id_produclasi'=>'5'
        ]);


        historial_producto::create([
            'fk_id_producto'=>'6',
            'fk_id_produclasi'=>'5'
        ]);

        historial_producto::create([
            'fk_id_producto'=>'7',
            'fk_id_produclasi'=>'2'
        ]);

        historial_producto::create([
            'fk_id_producto'=>'8',
            'fk_id_produclasi'=>'1'
        ]);
        historial_producto::create([
            'fk_id_producto'=>'9',
            'fk_id_produclasi'=>'2'
        ]);
        historial_producto::create([
            'fk_id_producto'=>'10',
            'fk_id_produclasi'=>'5'
        ]);
        historial_producto::create([
            'fk_id_producto'=>'11',
            'fk_id_produclasi'=>'5'
        ]);
        historial_producto::create([
            'fk_id_producto'=>'12',
            'fk_id_produclasi'=>'6'
        ]);

    }
}
