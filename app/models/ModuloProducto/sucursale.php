<?php

namespace App\models\ModuloProducto;

use Illuminate\Database\Eloquent\Model;

class sucursale extends Model
{
    //Una sucursal solo puede tener una direccion.
    public function direcciones_sucursales()
    {
      return $this->belongsTo(direcciones_sucursale::class,'id');
    }

}
