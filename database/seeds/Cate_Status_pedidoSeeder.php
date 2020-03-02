<?php

use App\models\ModuloPedidos\cate_status_pedido;
use Illuminate\Database\Seeder;

class Cate_Status_pedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        cate_status_pedido::create([
            "nom_cate" => "En progreso",
            "status" => "1",
            "desc_status" => "El cate_status_pedido se encuentra en espera de que se realize el pago del anticipo"
        ]);

        cate_status_pedido::create([
            "nom_cate" => "En elaboración",
            "status" => "1",
            "desc_status" => "El cate_status_pedido se encuentra en prepración"
        ]);

        cate_status_pedido::create([
            "nom_cate" => "Competado",
            "status" => "1",
            "desc_status" => "El cate_status_pedido se encuentra listo para su entrega"
        ]);

        cate_status_pedido::create([
            "nom_cate" => "Entregado",
            "status" => "1",
            "desc_status" => "El pedido se entrego al cliente"
        ]);
    }
}
