<?php

use Illuminate\Database\Seeder;
use App\models\ModuloProducto\producto_clasificacione;

class ClasificacionProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //---------------1
        producto_clasificacione::create([
            'nombre_clasificacion'=>'Infantiles',
            'status'=>'1',
            'desc_clasi'=>'Pasteles infantiles'
        ]);
        //---------------2
        producto_clasificacione::create([
            'nombre_clasificacion'=>'Bodas',
            'status'=>'1',
            'desc_clasi'=>'Pasteles de Bodas'
        ]);
        //---------------3
        producto_clasificacione::create([
            'nombre_clasificacion'=>'XV años',
            'status'=>'1',
            'desc_clasi'=>'Pasteles para XV años'
        ]);
        //---------------4
        producto_clasificacione::create([
            'nombre_clasificacion'=>'Temporada',
            'status'=>'1',
            'desc_clasi'=>'Pasteles en temporada'
        ]);
        //---------------5
        producto_clasificacione::create([
            'nombre_clasificacion'=>'Chocolate',
            'status'=>'1',
            'desc_clasi'=>'Pasteles de chocolates'
        ]);
        //---------------6
        producto_clasificacione::create([
            'nombre_clasificacion'=>'Frutales',
            'status'=>'1',
            'desc_clasi'=>'Pasteles en temporada'
        ]);
    }
}
