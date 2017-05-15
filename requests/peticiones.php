

<?php
require_once "../include.php";
/*echo  json_decode($_POST['codigoProvincia'],true);*/
$response = $_POST['json'];
$doc = json_decode($response,true);
$prov = $doc['codigoProvincia'];
$municipios=Array();
$municipios[0][1]="Alegría de Álava";
$municipios[0][2]="Amurrio";
$municipios[0][3]="Añana";
$municipios[0][4]="Aramayona";
$municipios[0][5]="Armiñón";
$municipios[0][6]="Añana";
$municipios[0][7]="Arraya-Maestu";
$municipios[0][8]="Arrazua-Ubarrundia";
$municipios[0][9]="Arceniega";
$municipios[0][10]="Aspárrena";
$municipios[0][11]="Ayala";
$municipios[0][12]="Baños de Ebro";
$municipios[0][13]="Barrundia";
$municipios[0][14]="Berantevilla";
$municipios[0][15]="Bernedo";
$municipios[0][16]="Campezo";


// Realizariamos las comprobaciones necesarias....
//Devolvemos el resultado de la validación
// Generar contenidos JSON de respuesta


//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos
$objeto_json = new stdClass();
$objeto_json->parametros=new stdClass();
$objeto_json->parametros->fecha_nacimiento=$fecha;


//json_encode nos codifica adecuadamente el tipo de datos a pasar, por que si son string hay que entrecomillar
//y si no lo hacemos a mano o utilizamos json_encode no dará el error: ReferenceError: ... is not defined
echo json_encode($objeto_json);



?>