/*Created by elena.jimenez on 08/05/2017. */


/***************DECLARACIÓN VARIABLES EXPRESIONES REGULARES****************/

var patnombre = new RegExp("^[a-zA-Z]+(\\s*[a-zA-Z]*)*[a-zA-Z]+$");
var patttel = new RegExp("(6|7|9)\\d{8}");
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var patusuario = new RegExp("^\\w+$");
var patdni = new RegExp("^[XYZxyz]?[\\-\\s]?\\d{5,8}[\-\\s]?[A-Za-z]$");
var patdir = new RegExp("^([A-Za-z]+\\,?\\s?)+\\d*$");
var patcp = new RegExp("^\\d{5}$");
var patfecha = new RegExp("^\\d{2}[/|-]\\d{2}[/|-]\\d{4}$");

/***************VALIDACIONES SUBMIT REGISTRO****************/

$(document).ready(function () {
    $("#registro").submit(function () {
        return comprobarBlancos() && comprobarValidacion();

    });
});

/*FUNCIÓN COMPROBAR BLANCOS: Comprueba si hay campos en blanco en el formulario y devuelve true or false para validar o invalidar el submit*/
function comprobarBlancos() {
    var inputs = $("#registro").find("input");
    var camposBlanco = [];
    var errorCampos;
    var cont = 0;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value.length <= 0) {
            camposBlanco[cont] = inputs[i].id;
            cont++;
        }
    }
    if (camposBlanco.length > 0) {

        errorCampos = camposBlanco.join();
        if(errorCampos.indexOf("fechanac"!=-1)){
            $("#errorsubmit").html('El/Los valores introducido/s en el campo fecha no son correctos');
        }else{
        $("#errorsubmit").html('Por favor rellena es/los campo/s: ' + errorCampos + ' son obligatorios');
        }
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
    var inputs = $("#registro").find("input");
    var contInvalid = 0;
    for (var i = 0; i < inputs.length; i++) {
        var id = inputs[i].id;
        switch (id) {
            case "nombre":
            case "apellidos":
                if (patnombre.test(inputs[i].value) == false) {
                    inputs[i].value = "";
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
                        $("#error" + id).html("La letra del " + id + " no es correcta");
                        contInvalid++;
                    }
                }
                else {
                    inputs[i].value = "";
                    $("#error" + id).html("El formato del campo " + id + " no es correcto.(Ej.12345678-B/12345678 B/ X12345678B /X 12345678-B / X12345678B)");
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
                        alert("cumple el pattern");
                        if (inputs[i].value.indexOf("/") != -1) {
                            date = inputs[i].value.split("/");
                            alert("lo has puesto con barras");
                        }
                        else {
                            date = inputs[i].value.split("-");
                            alert("lo has puesto con guiones");
                        }
                        dia = date[0];
                        mes = date[1];
                        anio = date[2];
                        boolBisiestos = comprobarBisiestos(fecha, anio, mes, dia);
                        alert( "el año es bisiesto: "+boolBisiestos);
                        if (boolBisiestos === false) {
                            alert("tiene q entrar "+id);
                            $("#error"+id).html("Lo siento, la fecha introducida no es correcta, el año no es bisiesto");
                            contInvalid++;
                        }
                        else{
                            $("#error"+id).html("");
                        }

                        fechaValida = verificarAdultos(dia, mes, anio, fecha);

                    }
                    else {

                        $("#error" + id).html("El campo fecha de nacimiento debe respetar el siguiente formato: 00/00/0000");
                        contInvalid++;

                    }

                }

                if (fechaValida === true) {
                    $("#error" + id).html("");

                }
                else {

                    $("#error" + id).html("Lo siento, debes ser mayor de edad para registrarte y poder efectuar compras");
                    contInvalid++;

                }
                break;
            case
            "telefono"
            :
                if (patttel.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    $("#error" + id).html("El " + id + " introducido debe empezar por 6,7 o 9 y debe contener 9 dígitos");
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
                    $("#error" + id).html("El " + id + " introducido no es correcto, debe cumplir el formato 'example@example.com'");
                  contInvalid++;
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
                    $("#error" + id).html("El campo " + id + " introducido debe contener sólo caracteres alfanuméricos");
                   contInvalid++;
                }
                break;

            case
            "password2"
            :
                if (inputs[i].value== $("#password").val()) {
                    $("#error" + id).html("");

                }
                else {
                    $("#error" + id).html("El " + id + " no coincide con el password inicial");
                   contInvalid++;
                }
                break;
            case
            "direccion"
            :
                if (patdir.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    $("#error" + id).html("El campo " + id + " sólo puede contener caracteres alfanuméricos y espacios, Ej. de la Castellana 25");
                   contInvalid++;
                }
                break;
            case
            "cp"
            :
                if (patcp.test(inputs[i].value)) {
                    $("#error" + id).html("");

                }
                else {
                    $("#error" + id).html("El código postal debe estar compuesto de 5 dígitos");
                  contInvalid++;
                }

        }
    }
    if (contInvalid > 0) {
        $("#condiciones").removeAttr('checked');
        $("#registrarse").attr('disabled', true);
        $("#errorsubmit").html('Por favor, revise los campos del formulario');
        return false;
    }
    else {
        return true;
    }


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
        else if(mes == 2 && dia > 29) {
            return false;
        }
    }
    else {
        if (mes == 2 && dia <= 28) {

            return true;
        }
        else  if(mes == 2 && dia > 28){
            alert("el mes es 2 y el dia mayor a 28");
            return false;
        }
    }

}
/***************HABILITACIÓN BOTON REGISTRO AL ACEPTAR CONDICIONES****************/
/*Si el checkbox está check,llama a la función comprobar blancos, para comprobar que los campos no están en blanco antes del submit. Si no está chequeado, deshabilita el botón submit*/
$(document).ready(function () {
    $("#condiciones").on('click', function () {
        if ($(this).is(':checked')) {
          comprobarBlancos();

        }

        else {
            $("#registrarse").attr('disabled', true);
            $("#errorcondiciones").html('Por favor, acepta las condiciones para poder registrarte');
        }
    })
})



/***************HABILITACIÓN CAMPOS REGISTRO CUANDO SE SELEECIONE MUNICIPIO****************/

$(document).ready(function () {
    $("#provincias").on('change', function () {
        if ($(this).val() == "0") {
            $("#errorprovincias").html('Por favor, selecciona una provincia de la lista');
            $("#tipoDireccion").attr('disabled', true);
            $("#direccion").attr('disabled', true);
            $("#cp").attr('disabled', true);
        }
        else {
            $("#errorprovincias").html('');
            $("#tipoDireccion").attr('disabled', false);
        }


    })


});

/***************HABILITACIÓN CAMPOS REGISTRO CUANDO SE SELEECIONE TIPO DE VÍA****************/

$(document).ready(function () {
    $("#tipoDireccion").on('change', function (event) {
        if ($(this).val() == "0") {
            $("#error" + event.target.id).html('Por favor, selecciona un tipo de vía de la lista');

            $("#direccion").attr('disabled', true);
            $("#cp").attr('disabled', true);
        }
        else {
            $("#errortipoDireccion").html('');
            $("#direccion").attr('disabled', false);
            $("#cp").attr('disabled', false);
        }


    })


});





