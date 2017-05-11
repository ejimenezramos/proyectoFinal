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
    var pat= new RegExp("^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$");
    $("#registro").find("input").change(function (event) {
       if (pat.test(event.target.value)==false) {

            $("#error" + event.target.id).html("*El campo " + event.target.id + " tiene un error de formato");

        }

        else{

            $("#error" + event.target.id).html("");

        }

    })
});