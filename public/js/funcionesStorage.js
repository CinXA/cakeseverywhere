/**
 *
 * @type {Array}
 * Variables globales
 */

var arrayProdCart = [];
var lastID='-1';
var jsonCart = {'id': -1, 'producto': '', 'precio': 120.58, 'cantidad': -2, 'img': ''};


/**
 * Busca un dato en un arreglo
 * @param dato
 * @returns {number}
 */
function getIdexArray(dato) {
    var aux= -1;
    var i;
    for ( i = 0; i < arrayProdCart.length; i++) {
        aux = arrayProdCart[i];
        if(aux.indexOf(dato)>-1) {
            break;
        }
    }
    return i;
}



/**
 *
 * Convierte un string con datos json a un array
 * Almacena el ultimo id
 */
function stringArrayProd(arrayString) {
    var expReg = /,{/;
    var array = arrayString.split(expReg);
    var aux;
    for (var i=1; i<array.length; i++) {
        aux = "{"+array[i];
        array[i] = aux;
    }
    if(array[0]===""){
        array.splice(0,1);
    }
    aux= StringToJson(array[array.length-1]);

    lastID=aux.id;
    return array;
}

// Obtenemos los productos del storage
function getProductsCar() {
    var strArray = localStorage.getItem('productCar');
    if (strArray == null) {
        console.log('No hay productos en carrito', arrayProdCart);

        localStorage.setItem('productCar', arrayProdCart.toString());
    } else {
        arrayProdCart = stringArrayProd(strArray);
    }
}



function StringToJson(str) {
    try {
        return JSON.parse(str);
    } catch (e) {
        return false;
    }
}

function addProducto() {
    jsonCart.id = $("#id-product-modal").text();
    if (jsonCart.id !== lastID){
        jsonCart.producto = $("#titulo-modal-producto").text()
        jsonCart.precio = $("#price-modal-producto").text().replace('$','');
        jsonCart.cantidad = $("#cantidad-modal").val();
        jsonCart.img= $("#img-modal-producto").prop('src');

        arrayProdCart.push(JSON.stringify(jsonCart));
        localStorage.setItem('productCar', arrayProdCart.toString());

    }


}


$(document).ready(function () {
    getProductsCar();
});