/**
 * Created by elena.jimenez on 03/05/2017.
 */
$(document).ready(function(){
    $("#prod").change(function(){
        $.ajax({
            method: "POST",
            url: "./requests/peticiones.php",
            data: { codigoProducto: $("#prod").val() }
        })
            .success(function( result ) {
                console.log( result);
            })
            .error(function( error ) {
                console.log( error );
            });
    });
});