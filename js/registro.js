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
    $("#fechanac").change(function () {
        var date = this.value.split("-");
        var year = date[0];
        var month = date[1];
        var day = date[2];
        var dateString = day + "/" + month + "/" + year;
        alert(dateString);
        if (dateString.match("^/([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])(\/|-)([1][9])([9][0-8]|[5678][0-9])$/")) {
            alert("si cumple")
        }
        else {
            alert("no cumple");
        }


    });
});