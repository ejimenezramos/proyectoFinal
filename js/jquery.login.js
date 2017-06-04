/**
 * Created by Elena-Trabajo on 04/06/2017.
 */
/*DECLARACIÓN VARIABLES*/
var camposErroneos=[];
var contCamposErroneos = 0;
var stringErroneos;

$(document).ready(function () {
    $("#formLogin").submit(function () {

        return comprobarCamposLogin();

    });
});
function comprobarCamposLogin() {

    var inp = $("#formLogin").find("input");
    camposErroneos.splice(0);
    contCamposErroneos=0;
    for (var i = 0; i < inp.length; i++) {
        if (inp[i].value.length <= 0) {

            camposErroneos[contCamposErroneos] = inp[i].id;
            contCamposErroneos++;
        }
    }
    if (camposErroneos.length > 0) {
        camposErroneos = camposErroneos.filter(compruebaUndefined);
        stringErroneos = camposErroneos.join();
        $("#errorlogin").html('El/Los campo/s: '+stringErroneos+' son obligatorios para iniciar sesión');
        return false;
    }
    else{
        $("#errorlogin").html('');
        return true;
    }
}


function compruebaUndefined(array) {
    return array !=undefined && array !=" " && array !="";
}