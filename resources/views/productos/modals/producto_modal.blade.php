<div id="producto-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo-modal-producto">New message</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="loader-modal-producto">

                    <div class="loader"></div>
                </div>
                <div id="datos-modal" style="">

                    <div class="row">
                        <div class="col-md-6">
                            <span class="d-none" id="id-product-modal"> </span>
                            <div class="modal-img">
                                <img id="img-modal-producto" src="{{ asset('').$p->get(0)->fotos->get(0)->ur_foto}}"
                                     class="img-fluid mx-auto" alt="Imgaen producto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <hr/>
                            <p id="desc-producto-modal">
                            </p>
                            <span id="price-modal-producto" class="price-text">$</span>

                        </div>
                    </div>

                    <div class="row my-2">

                        <div class="col-lg-6 col-md-1 col-sm-1"></div>
                        <div class="col-lg-2 col-md-4 col-sm-4">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary btn-increment" id="inputGroup-sizing-sm"><i
                                                class="fa fa-angle-up"></i></button>
                                </div>
                                <input type="text" id="cantidad-modal" class="form-control text-center" aria-label="Small"
                                       aria-describedby="inputGroup-sizing-sm" value="1" readonly min="1">
                                <div class="input-group-prepend">

                                    <button class="btn btn-outline-secondary btn-decrement" id="inputGroup-sizing-sm"><i
                                                class="fa fa-angle-down"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="text-center">
                                <button id="add-cart-btn" type="button" class="btn btn-outline-secondary text-uppercase">Agregar al
                                    carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
