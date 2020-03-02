<?php

namespace App\Http\Controllers;

use App\models\ModuloProducto\foto;
use App\models\ModuloProducto\historial_producto;
use http\Message;
use Illuminate\Http\Request;
//instacear para poder ocupar el modelo
use App\models\ModuloProducto\producto;
use App\models\ModuloProducto\producto_clasificacione;

//para usar el flash
use Laracasts\Flash\Flash;
use Intervention\Image\Image;
////usar esta calse para almanecar la imagen
use Illuminate\Support\Facades\Storage;
use function MongoDB\BSON\toJSON;


class ProductosController extends Controller
{
    protected function index(){
        $productos = producto::all();



        if ($productos -> isNotEmpty() and $productos->count()>7){

            $p = $productos -> random(9);
           // dd($p->get(4)->fotos->get(0)->ur_foto);
            //dd($p);
            return view('productos.principal',compact('p'));
        }


    }

    protected function vistaRegistro(){
        //Corregir...........................................
        $categorias=producto_clasificacione::all();
        return view('Formularios.registerProductos',compact('categorias'));
    }

    //store=almacenar
    protected function store(Request $request)
    {
        //------------VALIDAR------------------
        $this->validate($request,[
            'nom_producto' => ['required', 'string', 'max:100'],
            'desc_producto' => ['required', 'string'],
           'precio'=>['required', 'numeric'],
           'categoria'=>['required','string'],
           'imagen' => ['required', 'image'],

        ]);

        //------------Crear
       // $pr=producto::create($request->all());
        $producto= new producto();
        $producto-> nom_producto =$request->input('nom_producto');
        $producto-> desc_producto =$request->input('desc_producto');
        $producto-> precio =$request->input('precio');
        //guardar en nuestra base de datos
        $producto->save();


        $path='img/producto';
        $name='pastel' . '_' . $producto->id . '.'.$request->file('imagen')->extension() ;//.$file -> extension();
        if(!file_exists(public_path() .$path)){
            mkdir(public_path() .$path, 0777, true);
        }
        //dd($request->file('imagen')->move(public_path() .$path, $name));
        //mover imagen a el directorio

        $request->file('imagen')->move(public_path() .'/'.$path, $name);
        $ttt= $path .'/'.$name;

        //----------guardar en la base de datos en l atabla fotos
        $imagen= new foto();
        //campo de la base de datos, y le asignamos lo que viene del request
        //especificamente del input(en el formulario) que tiene el nombre de nustra variable a asignar
        $imagen-> fk_id_producto= $producto->id;
        $imagen-> nombre = $name;
        $imagen-> ur_foto = $ttt ;
        $imagen->save();

        //----------Guardar en historial producto
        $categoria=new historial_producto();
        $categoria->fk_id_producto= $producto->id;
        $categoria->fk_id_produclasi=$request->input('categoria');
        $categoria->save();

        return redirect()->route('registarProducto');

    }

    private function storeImage($file , $itemid){

    }

    protected function show(Request $request){
        $producto = producto::findOrFail($request->id);
        $producto->fotos;
        return $producto;
    }

    protected function todoPastel(){
        $tpasteles=producto::paginate(6);
        $p = $tpasteles -> random(1);
        return view('productos.pasteles',compact('tpasteles','p'));
    }
}
