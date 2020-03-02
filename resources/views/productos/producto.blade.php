@extends('templates.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4 p-1">
                <h1>Titulo del producto</h1>
                <div id="price">
                    <!-- Additional condition added for supporting product with variants - to show Promotions in PDP page -->

                    <p class="precio-promocion">
                        $4,999.00
                    </p>
                    <p class="precio-especial">
                        $7,299<sup class="decimalValuePrice">00</sup>
                    </p>
                    <p class="precio-promocion">
                        <span></span>
                        $4,999<sup class="decimalValuePrice">00</sup>
                    </p>
                </div>
                <div id="variantes">
                    <div class="caracteristicas">
                        <p>
                            Sabor:
                            <span>Cocholate</span>
                        </p>
                    </div>
                </div>
                <div id="productDescIntro" style="height:100px; overflow: auto">
                    <h3>Descripción</h3>
                    <div id="intro">

                        <p style="display: none;"></p>
                        <p>El <b>smartphone Motorola Moto G6 Plus 64 GB AT&amp;T</b> ha sido diseñado para que
                            experimentes como nunca antes innovación, diseño y tecnología en un equipo especial;
                            disfruta de la extraordinaria calidad de sus imágenes, captura fotografías con sorprendente
                            nitidez y déjate sorprender por la velocidad que te brinda su especial procesador. Este <i>smartphone</i>
                            incluye: manual, cable de sincronización, cargador de viaje, así como herramienta de
                            remoción de SIM. Para hacer de su uso una fascinante experiencia, descubre los complementos
                            ideales solo en <b>Liverpool</b></p>
                        <p style="display: none;"></p>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-md-3 p-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Or toggle this other
                                            custom radio</label>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Or toggle </label>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection