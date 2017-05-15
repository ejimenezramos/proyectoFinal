/**
 * Created by elena.jimenez on 03/05/2017.
 */
/****PETICIÓN AJAX PARA EL FILTRO POR CIUDAD REGISTRO CLIENTE****/
/*Elena:petición AJAX para el filtro de provincias y municipios en la página registro*/
$(document).ready(function(){
    $("#provincias").change(function(){
        if($("#provincias").val()==0){
           $("#errorprovincias").html('Por favor seleccione una provincia de la lista');
            $("#municipios").attr('disabled', true);
            $("#tipoDireccion").attr('disabled', true);
            $("#direccion").attr('disabled', true);
            $("#cp").attr('disabled', true);
        }else {
            $.ajax({
                method: "POST",
                url: "./requests/peticiones.php",
                data: {codigoProvincia: $("#provincias").val()}
            })
                .success(function (result) {
                    $("#municipios").attr('disabled', false);
                })
                .error(function (error) {
                    console.log(error);
                });
        }
    });
});
