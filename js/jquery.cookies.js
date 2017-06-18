
var str="";
var t="";
$(document).ready(function () {

    var inputsOcultos=$("#comprasRealizadas").find("input");

    for(var i=0;i<inputsOcultos.length;i++){
      str+=inputsOcultos[i].value+"|";
    }
    str=str.substring(0,str.length-1);


var strind=str.split("|");

    var table="<table title='Historial de pedidos' class='table' id='tablaHistorial'><tr><th>Nº Compra</th><th>Fecha</th><th>Importe</th></tr>"
var ob;
    for(var j=0;j<strind.length;j++){
        ob=strind[j].valueOf().split(":");
        table+="<tr>"
        for(var k=0;k<ob.length;k++){

            if(k==3){

                table+="<td>"+ob[k].valueOf()+"€"+"</td>";
            }
            else {
                if(k==0) {
                    table += "<td id='en'><button id='enlaceCompra" + ob[k].valueOf() + "' value=" + ob[k].valueOf() + ">" + ob[k].valueOf() + "</button></td>";


                }
                else if (k != 1) {
                    table += "<td>" + ob[k].valueOf() + "</td>";
                }
            }

        }
        table+="</tr>"

    }
$("#historialCompras").html(table);

});
/*var value="";
$(document).ready(function () {
    $("button").click(function (event) {
var inpProd=$("#comprasProd").find("input");
        for(var j=0;j<inpProd.length;j++){
            value=inpProd[j].valueOf().split(":");
            for(var k=0;k<value.length;k++){
                if(k==3){
                    if(value[k].valueOf()==event.target.value){

                    }
                }
            }
        }

    });
})*/
