/**
 * Created by Elena-Trabajo on 04/06/2017.
 */
/*DECLARACIÓN VARIABLES*/
var camposErroneos=[];
var contCamposErroneos = 0;
var stringBlancos;
var camposInvalidos = [];
var contInvalid = 0;
var stringCamposInvalidos;
var patusuario = new RegExp("^\\w+$");
$(document).ready(function () {
    $("#formLogin").submit(function () {

        return comprobarCamposLogin() && comprobarValidacionLogin();

    });
});
function comprobarCamposLogin() {

    var inp = $("#formLogin").find("input");
    camposErroneos.splice(0);
    $("#errorsubmit").html('');
    $("#errorlogin").css('opacity,1');
    contCamposErroneos=0;
    for (var i = 0; i < inp.length; i++) {
        if (inp[i].value.length <= 0) {

            camposErroneos[contCamposErroneos] = inp[i].id;
            contCamposErroneos++;
        }
    }
    if (camposErroneos.length > 0) {
        camposErroneos = camposErroneos.filter(compruebaUndefined);
        stringBlancos = camposErroneos.join();
        $("#errorlogin").html('El/Los campo/s: '+stringBlancos+' son obligatorios para iniciar sesión');
        return false;
    }
    else{
        $("#errorlogin").html('');
        return true;
    }
}

function comprobarValidacionLogin() {

    camposInvalidos.splice(0);
    var inputs = $("#formLogin").find("input");
    contInvalid = 0;
    $("#errorlogin").html('');
    $("#errorlogin").css('opacity', '1');
    var id;
    for (var i = 0; i < inputs.length; i++) {
        id = inputs[i].id;
        $("#error" + id).css('opacity', '1');

        switch (id) {
            case "usuario":
                if (patusuario.test(inputs[i].value)) {
                    $("#error"+id).html('');
                }
                else {
                    $("#error" + id).html('El campo ' + id + ' no puede contener caracteres especiales');
                    camposInvalidos[i] = id;
                    contInvalid++;
                }
                break;
            case "clave":
                if (patusuario.test(inputs[i].value)) {
                    $("#error"+id).html('');
                }
                else {

                    $("#error" + id).html('El campo ' + id + ' no puede contener caracteres especiales');
                    camposInvalidos[i] = id;
                    contInvalid++;
                }
                break;


        }


    }

    if (contInvalid > 0) {
        camposInvalidos = camposInvalidos.filter(compruebaUndefined);
        stringCamposInvalidos = camposInvalidos.join();
        $("#errorlogin").html('Revise el/los campos: ' + stringCamposInvalidos + ' tienen errores de formato');
        $("#errorlogin").fadeTo(15000, 0);
        return false;
    }
    else {
        $("#errorlogin").html('');
        return true;
    }
}



function compruebaUndefined(array) {
    return array !=undefined && array !=" " && array !="";
}


$(document).ready(function () {
    $("#formLogin").find("input").on('change', function (event) {
        if (contInvalid > 0) {
            var id = event.target.id;
            eliminarErrores(id);
        }
    });
});
function eliminarErrores(id) {

    var promesa = $("#error" + id).fadeTo(3000, 0);
    $.when(promesa).done(function () {
        $("#error" + id).html('');
    })

}