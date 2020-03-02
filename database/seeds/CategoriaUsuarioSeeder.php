<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias_usuarios')->insert([
            'nombre' => 'Comprador',
            'status' => 1,
            'desc_cate' => ' Privilegio de comprador',
        ]);

        DB::table('categorias_usuarios')->insert([
            'nombre' => 'Administrador',
            'status' => 1,
            'desc_cate' => ' Privilegio de administrador',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'last' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$y1OWax1iMJPTfwxMtNypmO8hLGGYH2fMHNYL3K6mBliM1rUSDzhPm',
            'tel_fijo' => '0000000',
            'tel_celular' => '0000000',
            'fk_id_privilegios' => 2,
            'fk_id_categorias_usuarios' => 2,
        ]);

    }
}
