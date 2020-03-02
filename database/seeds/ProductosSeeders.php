<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //el ultimo es un alias

class ProductosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Faker::create();
            ///-------------------1
            App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
                'nom_producto'=>'Imposible',
                'desc_producto'=>'Pan de chocolate bañado en tres leches, relleno de mousse de fresa con arroz con leche.',
                'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

            ]);
        //-------------------------2
        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Pastel de tres leches de vainilla',
            'desc_producto'=>'Pan de vainilla bañado en tres leches, relleno de mousse de fresa con arroz con leche.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------3
        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Explosion de chocolate',
            'desc_producto'=>'Pan de chocolate bañado en tres leches de chocolate relleno de ganache.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)
        ]);
        //-------------------------4
        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Cuatro chocolates',
            'desc_producto'=>'Pan de chocolate envinado con ron y relleno de mousse de chocolate blanco, oscuro y leche.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------5
        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Supremo de chocolate',
            'desc_producto'=>'Pan de chocolate tipo americano, relleno de ganache, fresa y nuez.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------6
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Malteada',
            'desc_producto'=>'Pan de chocolate relleno de cereza, bañado en malteada de moka con un toque de ron y yogurt.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------7
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Arcoiris',
            'desc_producto'=>'Pan de vainilla, fresa y chocolate bañado en mezcla napolitana. De tres leches relleno de crema con nuez.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------8
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Reina de fresa',
            'desc_producto'=>'Pan de vainilla envinado con jarabe natural y relleno de fresa con crema pura.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------9
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Azucena',
            'desc_producto'=>' Queso horneado con truffas de chocolate semiamargo con avellanas. Y truffas de leche con almendra y trozos de flan y pan de chocolate con tres leches.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------10
        App\models\ModuloProducto\producto::create([
            'nom_producto'=>'Agua de rosas',
            'desc_producto'=>'Elaborado con pan de vainilla tipo americano relleno de crema de queso y frambuesa. Envinado con jarabe de agua de rosas.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------11
        App\models\ModuloProducto\producto::create([
            'nom_producto'=>'Rey de chocolate',
            'desc_producto'=>'Pan de chocolate envinado con ron, cubierto de chocolate liquido y fresas.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);
        //-------------------------12
        App\models\ModuloProducto\producto::create([
            'nom_producto'=>'Pastel de banana',
            'desc_producto'=>'Pan de banana con relleno y decorado de banana.',
            'precio'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 400)

        ]);








    }
}
