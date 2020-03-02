<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//instacear para poder ocupar el modelo
use App\models\ModuloProducto\direcciones_sucursale;
use App\models\ModuloProducto\sucursale;


class DireccionesSucursalesController extends Controller
{
    //
    public function index(){
        return view('Formularios.registerDireccionesSucursales');
    }


    //obtenemos informacion desde un formulario desde request
    protected function register(Request $request)
    {
        //---------------METODO 1 ---------------
        //$direccion= new direcciones_sucursale();
        //campo de la base de datos, y le asignamos lo que viene del request
        //especificamente del input(en el formulario) que tiene el nombre de nustra variable a asignar
        //$direccion-> estado =$request->input('estado');
        //$direccion-> municipio =$request->input('municipio');
        //$direccion-> localidad =$request->input('localidad');
        //$direccion-> calle =$request->input('calle');
        //$direccion-> num_ext =$request->input('num_ext');
        //$direccion-> num_int =$request->input('num_int');
        //$direccion-> codigo_postal =$request->input('codigo_postal');
        //$direccion-> otras_referencias =$request->input('otras_referencias');
        //$direccion-> telefono_fijo =$request->input('telefono_fijo');
        //$direccion-> telefono_celular =$request->input('telefono_celular');
        //guardar en nuestra base de datos
       // $direccion->save();


        //------------VALIDAR------------------
        $this->validate($request,[
            'nombre_sucursal'=>['required','string','max:100'],
            'propietario'=>['required','string','max:100'],
            'fecha_registro'=>['required','date'],
            'estado' => ['required', 'string', 'max:100'],
            'municipio' => ['required', 'string'],
            'localidad' => ['required', 'string', 'max:100'],
            'calle' => ['required', 'string', 'max:100'],
            'num_ext' => ['required', 'string', 'max:50'],
            'num_int' => ['required', 'string', 'max:50'],
            'codigo_postal' => ['required', 'max:20'],
            'otras_referencias' => ['required', 'string', 'max:255'],
            'telefono_fijo' => ['required', 'max:11'],
            'telefono_celular' => ['required', 'max:11'],
    ]);
        //------------------METODO 2---------------
        //la direferencias es que los input deben de estar con el mismo nombre de los campos en la tabla de la base de datos
        //direcciones_sucursale::create($request->all());

        $direccion= new direcciones_sucursale();
        //campo de la base de datos, y le asignamos lo que viene del request
        //especificamente del input(en el formulario) que tiene el nombre de nustra variable a asignar
        $direccion-> estado =$request->input('estado');
        $direccion-> municipio =$request->input('municipio');
        $direccion-> localidad =$request->input('localidad');
        $direccion-> calle =$request->input('calle');
        $direccion-> num_ext =$request->input('num_ext');
        $direccion-> num_int =$request->input('num_int');
        $direccion-> codigo_postal =$request->input('codigo_postal');
        $direccion-> otras_referencias =$request->input('otras_referencias');
        $direccion-> telefono_fijo =$request->input('telefono_fijo');
        $direccion-> telefono_celular =$request->input('telefono_celular');
        //guardar en nuestra base de datos
         $direccion->save();

         $sucursal=new sucursale();
         $sucursal->nombre_sucursal=$request->input('nombre_sucursal');
        $sucursal->propietario=$request->input('propietario');
        $sucursal->fecha_registro=$request->input('fecha_registro');
        $sucursal->fk_id_direccion=$direccion->id;
        $sucursal->save();



        return view('Formularios.registerDireccionesSucursales');
    }
}
