<?php

namespace App\Http\Controllers;
use App\models\ModuloProducto\sucursale;

use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    public function index()
    {
        $sucursales=sucursale::all();
        return view('informative.listasucursales',compact('sucursales'));

    }

    public function show($id)
    {
        $sucursales=sucursale::find($id);
        //--------Imprimir lo que lanza la consuta------
        //dd($sucursales);
        return view('informative.listasucursales',compact('sucursales'));

    }
}
