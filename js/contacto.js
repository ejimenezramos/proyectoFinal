/**
 * Created by elena.jimenez on 03/05/2017.
 */
/**
 * Created by elena.jimenez on 03/05/2017.
 */
function validarDatos(){
   return compruebaConsulta()
}

function compruebaConsulta(){
    var consul=document.getElementById("consulta").value;
    console.log("hola");
    if(consul=="seleccion"){
        return false;
    }
    else{
        return true;
    }
}