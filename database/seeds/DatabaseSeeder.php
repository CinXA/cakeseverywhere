<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('Direcciones_SucursaleSeeders');
        $this->call('ProductosSeeders');
        $this->call('SucursalesSeeders');
        $this->call('FotosSeeders');
        $this->call('ClasificacionProductoSeeder');
        $this->call('HistorialProductoSeeder');

        $this->call(PrivilegiosUserSeeder::class);
        $this->call(CategoriaUsuarioSeeder::class);
    }
}
