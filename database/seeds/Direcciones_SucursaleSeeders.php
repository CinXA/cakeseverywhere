<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //el ultimo es un alias

class Direcciones_SucursaleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar datos
        $faker=Faker::create();

        for ($i=0;$i<10;$i++)
        {
            //modelo para insertar datos en alto nivel
            App\models\ModuloProducto\direcciones_sucursale::create([
            //DB::table('direcciones_sucursales')->insert(array(
                'estado' => $faker->country,
                'municipio' => $faker->city,
                'localidad' => $faker->citySuffix,
                'calle' => $faker->streetName,
                'num_ext' => $faker->buildingNumber,
                'num_int' => $faker->buildingNumber,
                'codigo_postal' => $faker->buildingNumber,
                'otras_referencias' => $faker->text,
                //'telefono_fijo' => $faker->randomNumber(10),
                'telefono_fijo' => '7221234569',
                'telefono_celular' => '7221234569'

            ]);
        }
    }
}
