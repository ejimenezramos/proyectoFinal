/*Created by elena.jimenez on 08/05/2017. */


/***************DECLARACIÓN VARIABLES EXPRESIONES REGULARES****************/

var patnombre = new RegExp("^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$");
var patttel = new RegExp("(6|7|9)\\d{8}");
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var patusuario = new RegExp("^\\w+$");
var patdni = new RegExp("^[XYZxyz]?[\\-\\s]?\\d{5,8}[\-\\s]?[A-Za-z]$");


/***************VALIDACIONES SUBMIT****************/
$(document).ready(function () {
    $("#registro").submit(function () {
        if ($("#registro").find("input").val().length <= 0) {
            alert("Todos los campos son obligatorios, por favor rellene los campos");
        }
    });
});
$(document).ready(function () {
    $("#login").submit(function () {
        if ($("#login").find("input").val().length <= 0) {
            alert("Todos los campos son obligatorios, por favor rellene los campos");
        }

    });
    $(document).ready(function () {
        $("#contacto").submit(function () {
            if ($("#contacto").find("input").val().length <= 0) {
                alert("Todos los campos son obligatorios, por favor rellene los campos");
            }
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
                        $("#error" + id).html("Lo sentimos, no puedes registrarte si no eres mayor de edad");
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
                            $("#error" + id).html("La letra del " + id + " no es correcta");
                        }
                    }
                    else {
                        $("#error" + id).html("El formato del campo " + id + " no es correcto.(Ej.12345678-B/12345678 B/ X12345678B /X 12345678-B / X12345678B)");
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
        $("#condiciones").on('click', function () {
            if ($(this).is(':checked')) {
                $("#registrarse").attr('disabled', false);
            }

        })


    })
});