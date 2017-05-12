/*Created by elena.jimenez on 08/05/2017.
 */
$(document).ready(function () {
    $("#registro").submit(function () {

    });
});
$(document).ready(function () {
    var patnombre = new RegExp("^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$");
    var patttel = new RegExp("(6|7|9)\\d{8}");
    var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
    patusuario = new RegExp("^\\w+$");
    $("#registro").find("input").change(function (event) {
        event.target.id
        switch (event.target.id) {
            case "nombre":
            case "apellidos":
                if (patnombre.test(event.target.value) == false) {
                    $("#error" + event.target.id).html("*El campo " + event.target.id + " tiene un error de formato, no admite dígitos ni caracteres especiales");
                }

                else {
                    $("#error" + event.target.id).html("");
                }
                break;
            case "fechanac":
                var fecha = new Date();
                var date = event.target.value.split("-");
                var year = date[0];
                if ((parseInt(fecha.getFullYear()) - year) < 18) {
                    $("#error" + event.target.id).html("Lo sentimos, no puedes efectuar la compra si no eres mayor de edad");
                }
                else {
                    $("#error" + event.target.id).html("");
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
                    $("#error" + event.target.id).html("");
                }
                else {
                    $("#error" + event.target.id).html("El " + event.target.id + " introducido no coincide con la letra");
                }
                break;
            case "telefono":
                if (patttel.test(event.target.value)) {
                    $("#error" + event.target.id).html("");
                }
                else {
                    $("#error" + event.target.id).html("El " + event.target.id + " introducido debe empezar por 6,7 o 9 y debe contener 9 dígitos");
                }
                break;
            case "email":
                if (patemail.test(event.target.value)) {
                    $("#error" + event.target.id).html("");
                }
                else {
                    $("#error" + event.target.id).html("El " + event.target.id + " introducido no es correcto, debe cumplir el formato 'example@example.com'");
                }
                break;
            case "usuario":
            case "password":
                if (patusuario.test(event.target.value)) {
                    $("#error" + event.target.id).html("");
                }
                else {
                    $("#error" + event.target.id).html("El " + event.target.id + " introducido debe contener sólo caracteres alfanuméricos");
                }
                break;

            case "password2":
                if (event.target.value == $("#password").val()) {
                    $("#error" + event.target.id).html("");
                }
                else {
                    $("#error" + event.target.id).html("El " + event.target.id + " no coincide con el password inicial");
                }


        }
    })
});