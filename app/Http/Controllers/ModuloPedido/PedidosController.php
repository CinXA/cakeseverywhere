<?php

namespace App\Http\Controllers\ModuloPedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\models\ModuloPedidos\pedido;

class PedidosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $pedidos = pedido::all();
        return view('productos.cart', compact("pedidos"));
    }


    public function addPedido(Request $request){
        $productos=json_decode($request->lisProduct);
        $id ="";
        foreach($productos as $d){
            $id= $d->id;
        }
        /*Descarga un archivo de forma automatica*/
        //return response()->download(public_path()."/img/producto/p1.jpg");
        return $id;
    }

    public function pdf($accion='ver',$tipo='digital')
    {
        $ruc = "10072486893";
        $numero = "00000412";
        $nombres = "Alan Tonatiuh";
        $dia = "09";
        $mes = "04";
        $ayo = "17";
        $direccion = "Toluca Mexico";
        $dni = "23918745";
        $total = 0;
        $articulos = [
            [
                "cantidad" => 3,
                "descripcion" => "COCINA A GAS",
                "precio" => 400.00,
                "importe" => 1200,
            ],
            [
                "cantidad" => 1,
                "descripcion" => "PLANCHA",
                "precio" => 85.00,
                "importe" => 85.00,
            ],
        ];
        foreach ($articulos as $key => $value) {
            $total += $value["importe"];
            $articulos[$key]["precio"] = number_format($value["precio"],2,'.',' ');;
            $articulos[$key]["importe"] = number_format($value["importe"],2,'.',' ');;

        }
        $total = number_format($total,2,'.',' ');

        $data['ruc'] = $ruc;
        $data['numero'] = $numero;
        $data['nombres'] = $nombres;
        $data['dia'] = $dia;
        $data['mes'] = $mes;
        $data['ayo'] = $ayo;
        $data['direccion'] = $direccion;
        $data['dni'] = $dni;
        $data['articulos'] = $articulos;
        $data['total'] = $total;
        $data['tipo'] = $tipo;
        $html = view('pdf.generar',$data)->render();

        $namefile = 'boleta_de_venta_'.time().'.pdf';

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/fonts',
            ]),
            'fontdata' => $fontData + [
                    'arial' => [
                        'R' => 'arial.ttf',
                        'B' => 'arialbd.ttf',
                    ],
                ],
            'default_font' => 'arial',
            // "format" => "A4",
            "format" => [264.8,188.9],
        ]);
        // $mpdf->SetTopMargin(5);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        // dd($mpdf);
        if($accion=='ver'){
            $mpdf->Output($namefile,"I");
        }elseif($accion=='descargar'){
            $mpdf->Output($namefile,"D");
        }
    }
}