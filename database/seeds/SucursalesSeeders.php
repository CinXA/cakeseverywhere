<?php

//para indicar toda la rua y solo usar la utima palabra
use App\models\ModuloProducto\sucursale;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SucursalesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        //obtenemos el id de la tabla
           // $variable = DB::select('SELECT id FROM DIRECCIONES_SUCURSALES WHERE ID=?', [1]);
           // dd($variable[0]->id);
        //-------------------Consulta para obtener id-----------------------
            $variable=DB::table('direcciones_sucursales')
            ->select('id')
            ->first();
            //----------------------Insertar dato
        sucursale::create([
           // DB::table('sucursales')->insert(array(
                'fk_id_direccion' => $variable->id,
                'nombre_sucursal' => $faker->name,
                'propietario' => $faker->name,
                'fecha_registro' => $faker->date($format = 'Y-m-d', $max = 'now')

            ]);

    }
}
