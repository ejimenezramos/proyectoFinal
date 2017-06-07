/**
 * Created by elena.jimenez on 07/06/2017.
 */

/*DECLARACIÓN VARIABLES*/
var pattdir2=new RegExp("[A-Za-z]{1,4}\\[A-Za-z]+\\s+\\,?\\d*");
var patnombre = new RegExp("^[a-zA-ZÁáÉéÍíÓóÚú]+(\\s*[a-zA-Z]*)*[a-zA-Z]+$");
var patfecha = new RegExp("^\\d{2}[/|-]\\d{2}[/|-]\\d{4}$");
var patdni = new RegExp("^[XYZxyz]?[\\-\\s]?\\d{5,8}[\-\\s]?[A-Za-z]$");
var patttel = new RegExp("(6|7|9)\\d{8}");
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var patusuario = new RegExp("^\\w+$");
var totalcamposerroneos = 0;
var camposInvalidos = [];
var contInvalid = 0;
var camposBlanco = [];
var camposInvalidos = [];
var cont = 0;

$(document).ready(function () {
    $("#modificacion").submit(function () {

        return comprobarBlancos() && comprobarValidacion();

    });
});

/*FUNCIÓN COMPROBAR BLANCOS: Comprueba si hay campos en blanco en el formulario y devuelve true or false para validar o invalidar el submit*/
function comprobarBlancos() {
    camposBlanco.splice(0);
    $("#errorsubmit").css('opacity,1');
    var inputs = $("#modificacion").find("input");
    var errorCampos;
    cont=0;
    for (var i = 0; i < inputs.length; i++) {

        if (inputs[i].value.length <= 0) {

            camposBlanco[cont] = inputs[i].id;
            cont++;
        }
    }
    if (camposBlanco.length > 0) {
        camposBlanco=camposBlanco.filter(compruebaUndefined);
        errorCampos = camposBlanco.join();
        $("#errorsubmit").html('Por favor rellena el/los campos: ');
        var aux = errorCampos.replace("fechanac", "fecha de nacimiento");
        var aux2 = aux.replace("cp", "código postal");
        var errores = aux2.replace("password2", "confirmación password");

        $("#errorsubmit").append(errores);

        $("#condiciones").removeAttr('checked');
        $("#registrarse").attr('disabled', true);

        return false;
    }
    else {
        $("#registrarse").attr('disabled', false);
        $("#errorsubmit").html('');
        $("#errorcondiciones").html('');
        return true;
    }


}



/*FUNCION COMPROBAR VALIDACION: Comprueba si el formato de cada campo es correcto y si no lo es invalida el submit y devuelve un mensaje de error explicativo*/

function comprobarValidacion() {
    camposInvalidos.splice(0);
    var inputs = $("#modificacion").find("input");
    contInvalid = 0;
    $("#errorvalidacion").html('');
    $("#errorvalidacion").css('opacity', '1');
    for (var i = 0; i < inputs.length; i++) {
        var id = inputs[i].id;
        $("#error" + id).css('opacity', '1');

        switch (id) {
            case "nombre":
                if (patnombre.test(inputs[i].value) == false) {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*El campo " + id + " tiene un error de formato, no admite dígitos ni caracteres especiales");
                    contInvalid++;
                }

                else {
                    $("#error" + id).html("");
                }
                break;
            case "apellidos":
                if (patnombre.test(inputs[i].value) == false) {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*El campo " + id + " tiene un error de formato, no admite dígitos ni caracteres especiales");
                    contInvalid++;
                }

                else {
                    $("#error" + id).html("");
                }
                break;
            case "dni":
                var dniLetters = "TRWAGMYFPDXBNJZSQVHLCKET";
                var dniValueMayusculas = $("#dni").val().toUpperCase();
                if (patdni.test(dniValueMayusculas)) {
                    if (dniValueMayusculas.indexOf(" " != -1) || dniValueMayusculas.indexOf("-" != -1)) {
                        var noSpaces = dniValueMayusculas.replace(/ /g, "");
                        dniValueMayusculas = noSpaces.replace(/-/g, "");

                        if (dniValueMayusculas.startsWith("X") || dniValueMayusculas.startsWith("Y") || dniValueMayusculas.startsWith("Z")) {

                            var dniNum = dniValueMayusculas.substring(1, dniValueMayusculas.length - 1);

                        }
                        else {
                            dniNum = dniValueMayusculas.substring(0, dniValueMayusculas.length - 1);

                        }
                        var dniLetter = dniValueMayusculas.substring(dniValueMayusculas.length - 1);
                    }


                    if (dniLetters[dniNum % 23] === dniLetter) {

                        $("#error" + id).html("");

                    }
                    else {
                        inputs[i].value = "";
                        camposInvalidos[i] = inputs[i].id;
                        $("#error" + id).html("*La letra del " + id + " no es correcta");
                        contInvalid++;
                    }
                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*El formato del campo " + id + " no es correcto.(Ej.12345678-B/12345678 B/ X12345678B /X 12345678-B / X12345678B)");
                    contInvalid++;


                }
                break;
            case "fechanac":

                var fecha = new Date();
                var anio;
                var mes;
                var dia;
                var date;
                var fechaValida;
                var boolBisiestos;
                if (comprobarNavegador() === "Chrome") {
                    date = inputs[i].value.split("-");
                    anio = date[0];
                    mes = date[1];
                    dia = date[2];
                    fechaValida = verificarAdultos(dia, mes, anio, fecha);
                }
                else {
                    if (patfecha.test(inputs[i].value)) {

                        if (inputs[i].value.indexOf("/") != -1) {
                            date = inputs[i].value.split("/");

                        }
                        else {
                            date = inputs[i].value.split("-");

                        }
                        dia = date[0];
                        mes = date[1];
                        anio = date[2];


                    }
                    else {

                        camposInvalidos[i] = inputs[i].id;
                        $("#error" + id).html("*El campo fecha de nacimiento debe respetar el siguiente formato: 00/00/0000");
                        contInvalid++;


                    }
                    fechaValida = verificarAdultos(dia, mes, anio, fecha);
                }

                if (fechaValida == true) {
                    $("#error" + id).html("");
                    boolBisiestos = comprobarBisiestos(fecha, anio, mes, dia);

                    if (boolBisiestos === false) {
                        camposInvalidos[i] = inputs[i].id;
                        $("#error" + id).html("*El año introducido no es bisiesto o el día introducido no es correcto");
                        inputs[i].value = "";
                        contInvalid++;


                    }
                    else {

                        $("#error" + id).html("");
                    }
                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*Lo siento, debes ser mayor de edad para registrarte y poder efectuar compras");
                    contInvalid++;

                }


                break;
            case "telefono":
                if (patttel.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*El " + id + " debe empezar por 6,7 o 9 y debe contener 9 dígitos");
                    contInvalid++;
                }
                break;
            case
            "email"
            :
                if (patemail.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    contInvalid++;
                    $("#error" + id).html("*El " + id + " introducido no es correcto, debe cumplir el formato 'example@example.com'");

                }
                break;
            case
            "usuario"
            :
            case
            "password"
            :
                if (patusuario.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*El " + id + " introducido debe contener sólo caracteres alfanuméricos");
                    contInvalid++;
                }
                break;

            case
            "password2"
            :
                if (inputs[i].value == $("#password").val()) {
                    $("#error" + id).html("");

                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*La confirmación del password no coincide con el password inicial");
                    contInvalid++;
                }
                break;
            case
            "direccionCompleta"
            :
                if (patdir2.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    inputs[i].value = "";
                    camposInvalidos[i] = inputs[i].id;
                    $("#error" + id).html("*El campo " + id + " sólo puede contener caracteres alfanuméricos y espacios, Ej. de la Castellana,25");
                    contInvalid++;
                }
                break;


        }

    }

    totalcamposerroneos = contInvalid;

    if (contInvalid > 0) {
        camposInvalidos=camposInvalidos.filter(compruebaUndefined);
        camposJoin = camposInvalidos.join();
        var aux = camposJoin.replace("fechanac", "fecha de nacimiento");
        var aux2 = aux.replace("cp", "código Postal");
        var errores = aux2.replace("password2", "confirmación password");
        $("#errorvalidacion").html("Revisa los campos: " + errores + ' tienen errores de formato');
        $("#errorvalidacion").fadeTo(15000, 0);


        return false;

    }
    else {


        $("#errorvalidacion").html('');
        $("#errorcondiciones").html('');
        return true;
    }


}


/*FUNCIÓN QUE LLAMA EN EL ONCHANGE DE LOS CAMPOS DEL FORMULARIO A LA FUNCIÓN eliminarErrores(), PARA SETEAR LOS CAMPOS DE ERROR*/


$(document).ready(function () {
    $("#registro").find("input").on('change', function (event) {
        if (totalcamposerroneos > 0) {
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

function compruebaUndefined(array) {
    return array !=undefined && array !=" " && array !="";
}
/*FUNCIÓN COMPROBAR NAVEGADOR: Comprueba el navegador que está utilizando el usuario*/

function comprobarNavegador() {
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Firefox") != -1) {
        return "Firefox";
    }
    else {
        return "Chrome";
    }
}
/*FUNCION VERIFICAR ADULTOS: Verifica si la fecha introducida por el usuario supera la mayoría de edad*/

function verificarAdultos(dia, mes, anio, fecha) {

    if (parseInt(fecha.getFullYear()) - anio > 18) {
        return true;
    }

    else if (parseInt(fecha.getFullYear()) - anio == 18) {

        if (( fecha.getMonth() + 1 < mes)) {
            return false;
        }
        else if (fecha.getMonth() + 1 > mes) {
            return true;
        }
        else {
            if (dia <= fecha.getDate()) {
                return true;
            }
            else {
                return false;
            }
        }

    }

    else {

        return false;
    }
}

/***************FUNCIÓN COMPROBAR BISIESTOS: comprueba si el año en el que estamos es bisiesto o no y si el día es mayor o menor a 29 en función del año****************/
function comprobarBisiestos(fecha, anio, mes, dia) {
    if (anio % 4 == 0 && anio % 100 != 0 || anio % 400 == 0) {
        if (mes == 2 && dia <= 29) {
            return true;
        }
        else if (mes == 2 && dia > 29) {
            return false;
        }
    }
    else {
        if (mes == 2 && dia <= 28) {

            return true;
        }
        else if (mes == 2 && dia > 28) {

            return false;
        }
    }

}