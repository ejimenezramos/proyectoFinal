/*Created by elena.jimenez on 08/05/2017. */


/***************DECLARACIÓN VARIABLES EXPRESIONES REGULARES****************/

var patnombre = new RegExp("^[a-zA-Z]+(\\s*[a-zA-Z]*)*[a-zA-Z]+$");
var patttel = new RegExp("(6|7|9)\\d{8}");
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var patusuario = new RegExp("^\\w+$");
var patdni = new RegExp("^[XYZxyz]?[\\-\\s]?\\d{5,8}[\-\\s]?[A-Za-z]$");
var patdir = new RegExp("^([A-Za-z]+\\,?\\s?)+\\d*$");
var patcp = new RegExp("^\\d{5}$");
var patfecha = new RegExp("^\\d{2}[/|-]\\d{2}[/|-]\\d{4}$")


/***************VALIDACIONES SUBMIT REGISTRO****************/

$(document).ready(function () {
    $("#registro").submit(function () {
        return comprobarNombre() && comprobarApellido() && comprobarFecha() && comprobarDni() && comprobarTelefono() && comprobarEmail() && comprobarDireccion() && comprobarCp() && comprobarUser() && comprobarPassword() && comprobarPassword2();
    });
});

/*FUNCIONES PARA COMPROBAR QUE EN EL SUBMIT EL VALOR DE LOS CAMPOS NO HAYA CAMBIADO*/
/*Si alguna de estas funciones devuelve false no se realiza el submit y salta el error correspondiente, sino se hace el submit con normalidad. Se controla que hayan vaciado el campo o que no cumpla el formato */


function comprobarNombre() {
    if ($("#nombre").val() === "") {
        $("#errorsubmit").html('Por favor, rellena todos los campos');
        return false;
    }
    else if (patnombre.test($("#nombre").val())) {
        return true;
    }
    else {
        $("#errorsubmit").html('Por favor, revisa los datos del formulario');
        return false;
    }
}
function comprobarApellido() {
    if ($("#apellidos").val() === "") {
        $("#errorsubmit").html('Por favor, rellena todos los campos');
    }
    else if (patnombre.test($("#apellidos").val())) {
        return true;
    }
    else {
        $("#errorsubmit").html('Por favor, revisa los datos del formulario');
        return false;
    }
}
function comprobarFecha() {
    if ($("#fechanac").val() === "") {
        $("#errorsubmit").html('Por favor, rellena todos los campos');
    }
    var fecha = new Date();
    var date = event.target.value.split("-");
    var year = date[0];
    if ((parseInt(fecha.getFullYear()) - year) < 18) {
        $("#errorsubmit").html('Por favor, revisa los datos del formulario');
        return false;
    }
    else {
        return true;
    }
}

function comprobarDni() {
    if ($("#dni").val() === "") {
        $("#errorsubmit").html('Por favor, rellena todos los campos');
    }
    if (patdni.test($("#dni").val())) {
        return true;
    }
    else {
        $("#errorsubmit").html('Por favor, revisa los datos del formulario');
        return false;
    }
}

function comprobarTelefono() {
    if ($("#telefono").val() === "") {
        $("#errorsubmit").html('Por favor, rellena todos los campos');
    }
    if (pattel.test($("#telefono").val())) {
        return true;
    }
    else {
        $("#errorsubmit").html('Por favor, revisa los datos del formulario');
        return false;
    }
}


/***************VALIDACIONES CHANGE() REGISTRO****************/

$(document).ready(function () {
    $("#registro").find("input").change(function (event) {
        var id = event.target.id;
        switch (id) {
            case "nombre":
            case "apellidos":
                if (patnombre.test(event.target.value) == false) {
                    $("#error" + id).html("*El campo " + id + " tiene un error de formato, no admite dígitos ni caracteres especiales");
                }

                else {
                    $("#error" + id).html("");
                }
                break;

            /**FECHA EN REVISION**/
            case "fechanac":
                var fecha = new Date();
                if (comprobarNavegador() == "Chrome") {
                    var date = event.target.value.split("-");
                    var anio = date[0];
                    var mes = date[1];
                    var dia = date[2];
alert(dia+" "+mes+" "+anio);

                    if ((parseInt(fecha.getFullYear())) - anio >= 18) {
                        $("#error" + id).html("");
                        alert((parseInt(fecha.getFullYear())) - anio == 18);
                        alert(mes);
                        var m=fecha.getMonth();
                        m+1;
                        alert(m);
                        if ((parseInt(fecha.getFullYear())) - anio == 18 && fecha.getMonth()+1 <= mes) {
                            alert("mes");
                            $("#error" + id).html("");
                            if (parseInt(fecha.getDate() <= dia)) {
                                alert("dias");
                                $("#error" + id).html("");

                            }
                        }
                    }
                    else {
                        $("#error" + id).html("Lo sentimos, no puedes registrarte si no eres mayor de edad");
                    }
                }

                else {
                    if (patfecha.test($("#fechanac").val())) {
                        alert("si cumple");
                    }
                    else {
                        $("#error" + id).html("Lo sentimos, no puedes registrarte si no eres mayor de edad");
                    }

                }
                break;
            case
            "dni"
            :
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
                        $("#error" + id).html("La letra del " + id + " no es correcta");
                    }
                }
                else {
                    $("#error" + id).html("El formato del campo " + id + " no es correcto.(Ej.12345678-B/12345678 B/ X12345678B /X 12345678-B / X12345678B)");
                }

                break;
            case
            "telefono"
            :
                if (patttel.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido debe empezar por 6,7 o 9 y debe contener 9 dígitos");
                }
                break;
            case
            "email"
            :
                if (patemail.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido no es correcto, debe cumplir el formato 'example@example.com'");
                }
                break;
            case
            "usuario"
            :
            case
            "password"
            :
                if (patusuario.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El campo " + id + " introducido debe contener sólo caracteres alfanuméricos");
                }
                break;

            case
            "password2"
            :
                if (event.target.value == $("#password").val()) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " no coincide con el password inicial");
                }
                break;
            case
            "direccion"
            :
                if (patdir.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El campo " + id + " sólo puede contener caracteres alfanuméricos y espacios, Ej. de la Castellana 25");
                }
                break;
            case
            "cp"
            :
                if (patcp.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El código postal debe estar compuesto de 5 dígitos");
                }


        }
    })
})
;

function comprobarNavegador() {
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Firefox") != -1) {
        return "Firefox";
    }
    else {
        return "Chrome";
    }
}
/***************HABILITACIÓN BOTON REGISTRO AL ACEPTAR CONDICIONES****************/

$(document).ready(function () {
    $("#condiciones").on('click', function () {
        if ($(this).is(':checked')) {
            $("#registrarse").attr('disabled', false);
        }
        else {
            $("#registrarse").attr('disabled', true);
            $("#errorsubmit").html('');
        }

    })


});


$(document).ready(function () {
    if ($("#registro").is(':disabled') && $("#registro").on('click', function () {
            alert("h");
            $("#errorcondiciones").html('Acepta los términos y condiciones si quieres enviar el formulario, gracias');
        }));


});

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

/***************VALIDACIONES SUBMIT() LOGIN****************/
$(document).ready(function () {
    $("#login").submit(function () {
        if ($("#login").find("input").val().length <= 0) {
            alert("Todos los campos son obligatorios, por favor rellene los campos");
        }

    })
});

/***************VALIDACIONES CHANGE() LOGIN****************/

$(document).ready(function () {
    $("#login").find("input").change(function (event) {
        var id = event.target.id;
        switch (id) {
            case "usuario":
            case "password":
                if (patusuario.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido no cumple el formato correcto, sólo caracteres alfanuméricos");
                }
                break;


        }
    });
});

/***************VALIDACIONES CHANGE() OLVIDÉ LA CONTRASEÑA LOGIN****************/

$(document).ready(function () {
    $("#olvido").find("input").change(function (event) {
        var id = event.target.id;
        switch (id) {
            case "email":
                if (patemail.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido no cumple el formato correcto, Ej. example@@example.com");
                }
                break;


        }
    });
});


