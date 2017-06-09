/**
 * Created by Elena-Trabajo on 04/06/2017.
 */
/*DECLARACIÓN DE VARIABLES*/

var patnombre = new RegExp("^[a-zA-Z]+(\\s*[a-zA-Z]*)*[a-zA-Z]+$");
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var camposVacios = [];
var camposInvalidos = [];
var contInvalid = 0;
var contCamposVacios = 0;
var stringCamposVacios;
var stringCamposInvalidos;

/***************VALIDACIONES SUBMIT CONTACTO****************/

$(document).ready(function () {
    $("#contacto").submit(function () {

        return comprobarBlancosContacto() && comprobarValidacionContacto();

    });
});

function comprobarBlancosContacto() {
    var inpObligatorios = $("#contacto").find("input");
    camposVacios.splice(0);
    $("#errorsubmit").css('opacity,1');
    for (i = 0; i < inpObligatorios.length; i++) {

        if (inpObligatorios[i].value <= 0) {

            camposVacios[contCamposVacios] = inpObligatorios[i].id;
            contCamposVacios++;
        }
    }
    if ($("#area").val().length <= 0) {
        $("#errorarea").html('');
        camposVacios[contCamposVacios] = "area";
        contCamposVacios++;
    }
    if ($("#consulta").val() == 0) {
        camposVacios[contCamposVacios] = "consulta";
        contCamposVacios++;
    }
    if (camposVacios.length > 0) {
        camposVacios = camposVacios.filter(compruebaUndefined);
        stringCamposVacios = camposVacios.join();
        $("#errorsubmit").html('El/Los campos: ' + stringCamposVacios + ' es/son obligatorios para enviar la consulta');
        $("#errorvalidacion").html('');
        return false;
    }
    else {
        $("#errorsubmit").html('');
        return true;
    }

}
function comprobarValidacionContacto() {

    camposInvalidos.splice(0);
    var inputs = $("#contacto").find("input");
    contInvalid = 0;
    $("#errorvalidacion").html('');
    $("#errorvalidacion").css('opacity', '1');
    var id;
    for (var i = 0; i < inputs.length; i++) {
        id = inputs[i].id;
        $("#error" + id).css('opacity', '1');

        switch (id) {
            case "nombre":
                if (patnombre.test(inputs[i].value)) {
                    $("#error"+id).html('');
                }
                else {
                    $("#error" + id).html('El campo ' + id + ' no puede contener dígitos ni caracteres especiales');
                    camposInvalidos[i] = id;
                    contInvalid++;
                }
                break;
            case "apellidos":
                if (patnombre.test(inputs[i].value)) {
                    $("#error"+id).html('');
                }
                else {

                    $("#error" + id).html('El campo ' + id + ' no puede contener dígitos ni caracteres especiales');
                    camposInvalidos[i] = id;
                    contInvalid++;
                }
                break;
            case "email":
                if (patemail.test(inputs[i].value)) {
                    $("#error" + id).html('');
                }
                else {
                    $("#error" + id).html('El campo ' + id + ' debe cumplir el formato: example@example.com');
                    camposInvalidos[i] = id;
                    contInvalid++;
                }

        }


    }
    if ($("#area").val().length > 240) {
        $("#errorarea").html('El campo area debe no puede contener más de 240 caracteres, disculpen las molestias.');
        camposInvalidos[camposInvalidos.length+1] = "área de texto";
        contInvalid++;
    } else {
        $("#errorarea").html('');
    }
    if (contInvalid > 0) {
        camposInvalidos = camposInvalidos.filter(compruebaUndefined);
        stringCamposInvalidos = camposInvalidos.join();
        $("#errorvalidacion").html('Revise el/los campos: ' + stringCamposInvalidos + ' tienen errores de formato');
        $("#errorvalidacion").fadeTo(15000, 0);
        return false;
    }
    else {
        $("#errorvalidacion").html('');
        return true;
    }
}

function compruebaUndefined(array) {
    return array != undefined && array != " " && array != "";
}

$(document).ready(function () {
    $("#contacto").find("input").on('change', function (event) {
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

