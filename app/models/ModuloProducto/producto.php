<?php

namespace App\models\ModuloProducto;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //cargarlos en masa
    protected $fillable=['nom_producto',
        'desc_producto',
    ];
    //Un producto puede tener muchas fotos.
    public function fotos()
    {
        return $this->hasMany(foto::class,'fk_id_producto');
    }
}
