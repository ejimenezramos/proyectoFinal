/**
 * Created by elena.jimenez on 03/05/2017.
 */
/****PETICIÓN AJAX PARA EL FILTRO POR CIUDAD REGISTRO CLIENTE****/
/*Elena:petición AJAX para el filtro de provincias y municipios en la página registro*/
$(document).ready(function(){
    $("#comunidades").change(function(){
        if($("#comunidades").val()==0){
           $("#errorcomunidades").html('Por favor seleccione una Comunidad Autónoma de la lista');
            $("#provincias").attr('disabled', true);
            $("#tipoDireccion").attr('disabled', true);
            $("#direccion").attr('disabled', true);
            $("#cp").attr('disabled', true);
        }else {
            $("#errorcomunidades").html('');
            $.ajax({
                method: "POST",
                url: "./requests/peticionesFiltros.php",
                data: {codigoComunidad: $("#comunidades").val()}
            })
                .success(function (result) {
                    $("#provincias").attr('disabled', false);

                   var ob=JSON.parse(result);
                    $("#provincias").html("<option value='0'>--Seleccione una provincia--</option>");
                    for (i=0;i<ob.provincias.length;i++){
                        $("#provincias").append("<option value="+ob.provincias[i]+">"+ob.provincias[i]+"</option>");

                    }

                })
                .error(function (error) {
                    console.log(error);
                });
        }
    });
});
