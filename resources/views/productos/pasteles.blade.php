@extends('templates.layout')
@section('content')
    <div class="d-none">
        <form id="add-product-form" action="{{url('cart/addProducto')}}" method="post">
            @csrf
            <input id="idProduct" name="idProduct" value="">
            <input id="nomProduct" name="nomProduct" value="">
            <input id="cantidad" name="cantidad" value="1">
            <input id="price" name="price" value="0.0">
            <input id="imgProduct" name="imgProduct" value="">
            <input type="submit"/>
        </form>
    </div>
    @include('productos.modals.producto_modal')
    <!--incio imagen pagina pateles-->
    <div class="img-producto " style="background-color: #4e555b">
        <img class="img-fluid rounded mx-auto d-block" src="{{asset('').$p->get(0)->fotos->get(0)['ur_foto']}}"
             alt="500px" width="500px">
    </div>
    <!--endimagen-->

    <!--Inicio pasteles-->
    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">PASTELES</h2>
        </div>

        <div class="card-columns" data-current="0">
            @foreach($tpasteles as $tpastel)
                <div class="card {{$loop->first?  'start-card':'' }} ">
                    <div class="container-img-see">
                        <a class="info-producto" data-id="{{ $tpastel['id'] }}">

                            <img class="card-img-top" src="{{asset('').$tpastel['fotos']->get(0)['ur_foto']}}"
                                 width="245" height="180" alt="Card image cap">
                        </a>
                        <span class="text-img-center">Ver</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$tpastel['nom_producto']}}</h5>
                        <p class="card-text">{{$tpastel['desc_producto']}}</p>
                        <p class="card-text">
                            <small class="text-muted"></small>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">$</div>
                        <div class="float-right">
                            <a class="info-producto" data-id="{{ $tpastel['id'] }}">
                                <i class="fa fa-shopping-cart" data-toggle="modal"
                                   data-target="#producto-modal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $tpasteles->links() }}</div>
        </ul>
    </nav>


@endsection

@section('javascript')
    <script src="{{asset('js/principal.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.info-producto').on('click', function (e) {
                $.ajax({
                    url: "{{url('infoProductos')}}",
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
                        $("#desc-producto-modal").text(data.desc_producto);
                        $("#price-modal-producto").text('$'+data.precio);
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
            $('#add-cart-btn').on('click', function () {
                $('#idProduct').val($("#id-product-modal").text());
                $('#nomProduct').val($("#titulo-modal-producto").text());
                $('#price').val($("#price-modal-producto").text().replace('$',''));
                $('#cantidad').val($("#cantidad-modal").val());
                $("#imgProduct").val($("#img-modal-producto").prop('src'));

                $("#add-product-form").submit();

            });
        });
    </script>
@endsection