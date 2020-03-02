<?php

namespace App\models\ModuloProducto;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    //
    protected $fillable=['nombre',
        'ur_foto',
    ];
    //Una fota solo puede tener un producto.
    public function producto()
    {
        return $this->belongsTo(producto::class,'id');
    }
}
