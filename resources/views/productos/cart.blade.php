@extends('templates.layout')
@section('content')



    <div class="row">
        <div class="col-md-8">

            <ul class="nav nav-pills nav-fill nav-tab-custom p-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link custom-yellow-text active" id="pills-home-tab" data-toggle="pill"
                       href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mi carito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-yellow-text" id="pills-profile-tab" data-toggle="pill"
                       href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Pago
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-yellow-text" id="pills-contact-tab" data-toggle="pill"
                       href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        Compras en progreso
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active p-2" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">

                    <div class="card">
                        <div class="card-body">

                            <!-- Shopping Cart table -->
                            <div class="table-responsive">

                                <table class="table product-table">

                                    <!-- Table head -->
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="font-weight-bold">
                                            <strong>Pastel</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Precio</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Cantidad</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Costo</strong>
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <!-- /.Table head -->

                                    <!-- Table body -->
                                    <tbody id="tab-cart-product">

                                    <!-- First row -->



                                    </tbody>
                                    <!-- /.Table body -->

                                </table>

                            </div>
                            <!-- /.Shopping Cart table -->

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade p-2" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-outline-dark btn-lg btn-block my-2"><i class="fa fa-shopping-cart"></i> Solo en Tienda</button>
                            <div class="alert alert-success">
                                <strong>Importante: </strong><br/> Para realizar tu pedido, es necesario que entregues un anticipo del 50% de tu pedido,
                                a los 3 días hábiles  haberse generado  tu ticket.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-2" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-center">

                                    <tr>
                                        <th class="font-weight-bold" >
                                            <strong>Número de pedido</strong>
                                        </th>
                                        <th class="font-weight-bold">
                                            <strong>Número de Articulos</strong>
                                        </th>

                                        <th class="font-weight-bold">
                                            <strong>Lista de Articulos</strong>
                                        </th>

                                        <th class="font-weight-bold">
                                            <strong>Estado del pedido</strong>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 na
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">

                <button class="btn btn-outline-info btn-lg btn-block my-2" id="btn-pedido">
                    <i id="spin-pedido" style="display: none" class="fa fa-circle-o-notch fa-spin"></i> Realizar Pedido
                </button>
            <div class="card my-2">

                <!--Card content-->
                <div class="card-body">
                    <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Resumen</h4>

                    <hr>
                    <div id="resumen-content">

                    </div>

                </div>

            </div>
            <!--/.Card-->
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{asset('js/funcionesStorage.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>
@endsection