/*Created by elena.jimenez on 08/05/2017. */


/***************DECLARACIÓN VARIABLES EXPRESIONES REGULARES****************/
var patnombre = new RegExp("^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$");
var patttel = new RegExp("(6|7|9)\\d{8}");
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var patusuario = new RegExp("^\\w+$");


/***************VALIDACIONES SUBMIT****************/
$(document).ready(function () {
    $("#registro").submit(function () {

    });
});
$(document).ready(function () {
    $("#login").submit(function () {

    });
});

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
            case "fechanac":
                var fecha = new Date();
                var date = event.target.value.split("-");
                var year = date[0];
                if ((parseInt(fecha.getFullYear()) - year) < 18) {
                    $("#error" + id).html("Lo sentimos, no puedes efectuar la compra si no eres mayor de edad");
                }
                else {
                    $("#error" + id).html("");
                }
                break;
            case "dni":
                var dniLetters = "TRWAGMYFPDXBNJZSQVHLCKET";
                if ($("#dni").val().indexOf("-") != -1) {
                    var a = $("#dni").val().split("-");
                    var dniNum = a[0];
                    var dniLetter = a[1];
                }
                else {
                    dniNum = $("#dni").val().slice(0, 8);
                    dniLetter = $("#dni").val().slice(8);
                }


                if (dniLetters[dniNum % 23] === dniLetter) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " El formato del campo " + id + " es: 12345678-B, la letra introducida debe ser correcta");
                }
                break;
            case "telefono":
                if (patttel.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido debe empezar por 6,7 o 9 y debe contener 9 dígitos");
                }
                break;
            case "email":
                if (patemail.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido no es correcto, debe cumplir el formato 'example@example.com'");
                }
                break;
            case "usuario":
            case "password":
                if (patusuario.test(event.target.value)) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " introducido debe contener sólo caracteres alfanuméricos");
                }
                break;

            case "password2":
                if (event.target.value == $("#password").val()) {
                    $("#error" + id).html("");
                }
                else {
                    $("#error" + id).html("El " + id + " no coincide con el password inicial");
                }


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

/***************VALIDACIONES CHANGE() OLVIDÉ LA CONTRASEÑA****************/

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


/***************HABILITACIÓN BOTON REGISTRO AL ACEPTAR CONDICIONES****************/

$(document).ready(function () {
    $("#condiciones").click(function () {
        if ($("#condiciones").checked == true)
            $("#registrarse");

    });
});