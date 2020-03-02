function dragNdrop(event, tamaño) {
    var inputFile = event.target;
    var file = inputFile.files[0];
    var fileName = URL.createObjectURL(file);

    var preview = $(inputFile).next()[0];
    var maxSize = 1048576; //bytes
    var exp = /(?:.jpg)|(?:.jpeg)|(?:.png)$/i; //Extensiones válidas

    var error = {
        state: false,
        msg: ''
    };
    if (!exp.test(inputFile.value)) {
        error.state = false;
        error.msg += 'La extensión del archivo no es válida.';

    } else {
        if (maxSize > file.size) {
            error.state = true;
            error.msg += 'La imágen no puede ocupar más de ' + maxSize / 1048576 + ' MB.';
        }
    }

    if (error.state) {
        $(inputFile).prev().hide();
        inputFile.parentNode.style.border = "0px";
        var previewImg = document.createElement("img");
        previewImg.setAttribute("src", fileName);
        previewImg.setAttribute("alt", "foto");
        previewImg.setAttribute("class", tamaño);
        preview.innerHTML = "";
        preview.appendChild(previewImg);
    } else {
        inputFile.value = '';
        $('#cont-aviso').text(error.msg);
        $('#modal-aviso').modal('show');
    }
}
function drag(event, tamaño) {
    event.target.parentNode.className = 'draging dragBox ' + tamaño;

}
function dragLeave(event) {
    event.target.parentNode.className = event.target.parentNode.className.replace('draging', '');
}
function drop(event) {
    event.target.parentNode.className = event.target.parentNode.className.replace('draging', '');
}


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});