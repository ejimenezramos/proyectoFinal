/**
 * Created by elena.jimenez on 08/05/2017.
 */
function validate() {
    return checkDNI();
}
function checkDNI() {
    if (document.getElementById("dni").value == "5555") {
        alert("hola");
        return true;
    }
    else {
        alert("no");
        return false;
    }

}
function checkValidity(){
    document.getElementById("registro");

}
/*$("registro").submit(function () {
 var dni=$("registro").find($("dni"));
 alert(dni);
 })
 ;*/