
$(document).ready(function () {


    // Ingrementa el valor del input
    $('.btn-increment').on('click',function () {
       var input=$(this).parents().parents().children('input');
       var cantidad= parseInt(input.val())+ 1;
       input.val(cantidad);
    });

    $('.btn-decrement').on('click',function () {
        var input=$(this).parents().parents().children('input');
        var cantidad= parseInt(input.val());
        if(input.val()>1){
            cantidad--;
        }
        input.val(cantidad);
    });


    $('#add-cart-btn').on('click', function () {
        addProducto();
       location.replace('/cart');

    });

});