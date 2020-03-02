<?php

namespace App\models\ModuloProducto;

use Illuminate\Database\Eloquent\Model;

class direcciones_sucursale extends Model
{
    //permitir que sean cargados de forma masiva
    protected $fillable = ['estado', 'municipio', 'localidad', 'calle', 'num_ext',
        'num_ext', 'num_int', 'codigo_postal', 'otras_referencias', 'telefono_fijo',
        'telefono_celular',
    ];


}
