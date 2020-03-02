<?php

use Illuminate\Database\Seeder;
//es un componente que permite generar datos
use Faker\Factory as Faker;

use App\models\ModuloProducto\foto;

class FotosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'1',
            'nombre'=>'pastel_1.jpg',
            'ur_foto' =>'img/producto/p1.jpg'

        ]);

        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'2',
            'nombre'=>'pastel_2.jpg',
            'ur_foto' =>'img/producto/p2.jpg'

        ]);

             foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'3',
            'nombre'=>'pastel_3.jpg',
            'ur_foto' =>'img/producto/P3.jpg'

        ]);

        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'4',
            'nombre'=>'pastel_4.jpg',
            'ur_foto' =>'img/producto/P4.jpg'

        ]);



        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'5',
            'nombre'=>'pastel_5.jpg',
            'ur_foto' =>'img/producto/pastel_55.jpg'

        ]);

        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'6',
            'nombre'=>'pastel_6.jpg',
            'ur_foto' =>'img/producto/pastel_5.jpeg'

        ]);


        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'7',
            'nombre'=>'pastel_7.jpg',
            'ur_foto' =>'img/producto/pastel_7.jpg'

        ]);

        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'8',
            'nombre'=>'pastel_8.jpg',
            'ur_foto' =>'img/producto/pastel_8.jpg'

        ]);
        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'9',
            'nombre'=>'pastel_9.jpg',
            'ur_foto' =>'img/producto/pastel_9.jpeg'

        ]);
        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'10',
            'nombre'=>'pastel_10.jpg',
            'ur_foto' =>'img/producto/pastel_10.jpeg'

        ]);

        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'11',
            'nombre'=>'pastel_11.jpg',
            'ur_foto' =>'img/producto/pastel_11.jpeg'

        ]);
        foto::create([
            //DB::table('productos')->insert(array(
            'fk_id_producto'=>'12',
            'nombre'=>'pastel_12.jpg',
            'ur_foto' =>'img/producto/pastel_12.jpg'

        ]);




    }
}
