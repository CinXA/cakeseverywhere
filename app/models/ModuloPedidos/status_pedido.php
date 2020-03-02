<?php

namespace App\models\ModuloPedidos;

use Illuminate\Database\Eloquent\Model;

class status_pedido extends Model
{

    public function cate_status_pedido(){
        return $this->hasOne('App\ModuloPedidos\cate_status_pedidp');
    }


}
