var current = 0;
var imagenes = new Array();
var cardActual;
$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }

    $('.left-arrow').on('click',function() {

        current=$(this).parent().data('current');

        if (current > 0) {
            console.log('Current mayor a 0: '+current);
            current = current - 1;
            cardActual = cardActual.prev();

        } else {
            current = 0;
        }

        $(this).parent().data('current', current);
        $(".carrusel").animate({"left": -(cardActual.position().left)}, 400);

        return false;
    });

    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('click', function() {
        current=$(this).parent().data('current');
        if (numImages > current + 3) {
            current = current+1;
            if (typeof(cardActual) == 'undefined' ){
                cardActual = $(this).parent().find('.start-card');
            }
            cardActual = cardActual.next();

        } else {
            current=0;
            cardActual = $(this).parent().find('.start-card');
        }
        console.log('derecha: '+current)
        $(this).parent().data('current',current);
        $(".carrusel").animate({"left": -(cardActual.position().left)}, 400);
        return false;
    });
});