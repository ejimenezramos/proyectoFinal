/*Created by elena.jimenez on 08/05/2017.
 */
$(document).ready(function () {
    $("#registro").submit(function () {
        var dniLetters = "TRWAGMYFPDXBNJZSQVHLCKET";
        var a = $("#dni").val().split("-");
        var dniNum = a[0];
        var dniLetter = a[1];
        if (dniLetters[dniNum % 23] === dniLetter) {
            alert("si es igual");
        }
        else {
            alert("no");
        }
    });
});
$(document).ready(function () {
    var pat = new RegExp("^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$");
    $("#registro").find("input").change(function (event) {
        switch (event.target.id) {
            case "nombre":
            case "apellidos":
            if(pat.test(event.target.value) == false)
            {

                $("#error" + event.target.id).html("*El campo " + event.target.id + " tiene un error de formato, no admite dígitos ni caracteres especiales");

            }

            else
            {

                $("#error" + event.target.id).html("");

            }
            break;
            case "fechanac":
                var fecha=new Date();
                var date=event.target.value.split("-");
                var year=date[0];
                if((parseInt(fecha.getFullYear())-year)<18){
                    $("#error" + event.target.id).html("Lo sentimos, no puedes efectuar la compra si no eres mayor de edad");
                }
                else{
                    $("#error" + event.target.id).html("");
                }




        }
    })
});