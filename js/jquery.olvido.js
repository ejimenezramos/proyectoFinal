/**
 * Created by Elena-Trabajo on 04/06/2017.
 */
/*DECLARACIÓN VARIABLES*/
var patemail = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
$(document).ready(function () {
    $("#olvido").submit(function () {

        return comprobarCampoEmail();

    });
});

function comprobarCampoEmail() {

    var email = $("#email").val();
    if (email.length <= 0) {
        $("#erroremail").html("Debes rellenar el campo email si quieres recuperar tu contraseña");
        return false;
    }

    else if (!patemail.test(email)) {
        $("#erroremail").html('El formato correcto de email es: example@example.com');
        return false;
    }
    else {
        $("#errorlogin").html('');
        return true;
    }
}


