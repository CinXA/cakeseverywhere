@extends('templates.layout')
@section('content')




    @include('productos.modals.producto_modal')
    <div class="bd-example">
        <div id="carouselHead" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHead" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHead" data-slide-to="1"></li>
                <li data-target="#carouselHead" data-slide-to="2"></li>
                <li data-target="#carouselHead" data-slide-to="3"></li>
            </ol>
            <!--Comentario Manuel para verificar GIT-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('').$p->get(4)->fotos->get(0)->ur_foto}}" height="550" class="d-block w-100"  alt="foto-pastel1">
                    <div class="carousel-caption d-none d-md-block">

                        <p>Deleita tu paladar</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('').$p->get(5)->fotos->get(0)->ur_foto}}"  height="550" class="d-block w-100" alt="foto-pastel2">
                    <div class="carousel-caption d-none d-md-block">

                        <p>Una delicia visual</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('').$p->get(6)->fotos->get(0)->ur_foto}}" height="550" class="d-block w-100" alt="foto-pastel3">
                    <div class="carousel-caption d-none d-md-block">

                        <p>Una delicia de los dioses</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('').$p->get(7)->fotos->get(0)->ur_foto}}"  height="550" class="d-block w-100" alt="foto-pastel4"/>
                    <div class="carousel-caption d-none d-md-block">

                        <p>Nunca es suficiente</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHead" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHead" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <!--endcarousel-->

    <!-- SUGERENCIAS-->
    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">SUGERENCIAS</h2>
        </div>
        <div class="card-columns" data-current="0">
            @forelse($p as $producto)
                <div class="card {{$loop->first?  'start-card':'' }} ">
                    <div class="container-img-see">
                        <a class="info-producto" data-id="{{ $producto['id'] }}">

                            <img class="card-img-top" src="{{asset('').$producto['fotos']->get(0)['ur_foto']}}" width="245" height="180" alt="Card image cap">
                             <span class="text-img-center">Ver</span>
                        </a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{$producto['nom_producto']}}</h5>
                        <p class="card-text">{{$producto['desc_producto']}}</p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">$</div>
                        <div class="float-right">
                            <a class="info-producto" data-id="{{ $producto['id'] }}">
                                <i class="fa fa-shopping-cart add-cart" data-toggle="modal"
                                   data-target="#producto-modal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title">No hay datos</h5>
                    </div>
                </div>
            @endforelse
      </div>
    </section>

    <!-- ENDSUGERENCIAS-->




    <!-- LOMAS VENDIDO-->
    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">MÁS VENDIDOS</h2>
        </div>
        <div class="card-deck" data-current="0">
            <div class="card start-card">
                <img class="card-img-top" src="{{asset('img/producto/p2.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="{{asset('img/producto/P3.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card ">
                <img class="card-img-top" src="{{asset('img/producto/P3.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card ">
                <img class="card-img-top" src="{{asset('img/producto/P3.jpg')}}" width="245" height="180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ENDLOMAS VENDIDO-->

@endsection

@section('javascript')
    <script src="{{asset('js/funcionesStorage.js')}}"></script>
    <script src="{{asset('js/principal.js')}}"></script>
    <script>
        $(document).ready(function () {


            $('.info-producto').on('click', function (e) {
                $.ajax({
                    url: "/infoProductos",
                    method: 'GET',
                    data: {"id": $(this).data('id')},
                    dataType: 'json',
                    beforeSend: function () {
                        $("#producto-modal").modal('show');
                        $("#loader-modal-producto").show();
                    },
                    success: function (data) {

                        $("#img-modal-producto").prop('src', "{{asset('')}}" + data.fotos[0].ur_foto);
                        $("#id-product-modal").text(data.id);
                        $("#titulo-modal-producto").text(data.nom_producto);
                        $("#price-modal-producto").text('$' + data.precio);
                        $("#desc-producto-modal").text(data.desc_producto);
                    },
                    complete: function () {

                        $("#datos-modal").show();
                        $("#loader-modal-producto").hide();
                    },
                    error: function (xhr, status, thrownError) {
                        alert('Error: ' + xhr + 'mensaje: ' + thrownError);
                    }
                });
            });
        });
    </script>
@endsection