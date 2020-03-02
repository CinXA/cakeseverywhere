<?php

namespace App\models\ModuloPedidos;

use Illuminate\Database\Eloquent\Model;

class cate_status_pedido extends Model
{


    protected $fillable = ['nom_cate', 'status', 'desc_status'];
}
