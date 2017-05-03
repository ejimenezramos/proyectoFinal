

<?php
require_once "../include.php";
echo  json_decode($_POST['codigoProducto'],true);
/*$response = $_POST['json'];
$doc = json_decode($response,true);
$fecha = $doc['fecha_nacimiento'];
$codigo = $doc['codigo_postal'];
$telefono = $doc['telefono'];


// Realizariamos las comprobaciones necesarias....
//Devolvemos el resultado de la validación
// Generar contenidos JSON de respuesta

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos
$objeto_json = new stdClass();
$objeto_json->mensaje="Todo es correcto";
$objeto_json->parametros=new stdClass();
$objeto_json->parametros->fecha_nacimiento=$fecha;
$objeto_json->parametros->codigo_postal=$codigo;
$objeto_json->parametros->telefono=$telefono;

//json_encode nos codifica adecuadamente el tipo de datos a pasar, por que si son string hay que entrecomillar
//y si no lo hacemos a mano o utilizamos json_encode no dará el error: ReferenceError: ... is not defined
echo json_encode($objeto_json);*/



?>