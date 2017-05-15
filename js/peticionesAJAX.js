/**
 * Created by elena.jimenez on 03/05/2017.
 */
/*Elena:petición AJAX para el filtro de productos en la página productos*/
$(document).ready(function(){
    $("#prod").change(function(){
        $.ajax({
            method: "POST",
            url: "./requests/compruebaProductos.php",
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
/*Elena:petición AJAX para el filtro de provincias y municipios en la página registro*/
$(document).ready(function(){
    $("#provincias").change(function(){
        $.ajax({
            method: "POST",
            url: "./requests/compruebaProductos.php",
            data: { codigoProvincia: $("#provincias").val() }
        })
            .success(function( result ) {
                console.log( result);
            })
            .error(function( error ) {
                console.log( error );
            });
    });
});