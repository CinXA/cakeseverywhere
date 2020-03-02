<?php

namespace App\models\ModuloPedidos;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    public function statusPedido(){
        $this->belongsTo(status_pedido::class,'fk_id_status_pedidos');
    }
}
