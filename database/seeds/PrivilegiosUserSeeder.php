<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegiosUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('privilegios')->insert([
           'nom_privileg' => 'Comprador',
           'fecha_registro' => '2019-05-07 19:02:57',
           'desc_privileg' => 'Privilegio para el comprador',
       ]);

        DB::table('privilegios')->insert([
            'nom_privileg' => 'Administrador',
            'fecha_registro' => '2019-05-07 19:02:57',
            'desc_privileg' => 'Privilegio para administrar la tienda',
        ]);
    }
}
