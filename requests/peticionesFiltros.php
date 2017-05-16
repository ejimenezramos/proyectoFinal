<?php
/**
 * Created by PhpStorm.
 * User: elena.jimenez
 * Date: 16/05/2017
 * Time: 11:27
 */

require_once "../include.php";
$com = $_POST['codigoComunidad'];
$provincias[1][] = "Almería";
$provincias[1][] = "Cádiz";
$provincias[1][] = "Córdoba";
$provincias[1][] = "Granada";
$provincias[1][] = "Huelva";
$provincias[1][] = "Jaén";
$provincias[1][] = "Málaga";
$provincias[1][] = "Sevilla";
$provincias[2][] = "Huesca";
$provincias[2][] = "Teruel";
$provincias[2][] = "Zaragoza";
$provincias[3][] = "Asturias";
$provincias[4][] = "Cantabria";
$provincias[5][] = "Ávila";
$provincias[5][] = "Burgos";
$provincias[5][] = "León";
$provincias[5][] = "Palencia";
$provincias[5][] = "Salamanca";
$provincias[5][] = "Segovia";
$provincias[5][] = "Soria";
$provincias[5][] = "Valladolid";
$provincias[5][] = "Zamora";
$provincias[6][] = "Albacete";
$provincias[6][] = "Ciudad Real";
$provincias[6][] = "Cuenca";
$provincias[6][] = "Guadalajara";
$provincias[6][] = "Toledo";
$provincias[7][] = "Barcelona";
$provincias[7][] = "Gerona";
$provincias[7][] = "Lérida";
$provincias[7][] = "Tarragona";
$provincias[8][] = "Badajoz";
$provincias[8][] = "Cáceres";
$provincias[9][] = "La Coruña";
$provincias[9][] = "Lugo";
$provincias[9][] = "Orense";
$provincias[9][] = "Pontevedra";
$provincias[10][] = "La Rioja";
$provincias[11][] = "Baleares";
$provincias[12][] = "Álava";
$provincias[12][] = "Guipúzcoa";
$provincias[12][] = "Vizcaya";
$provincias[13][] = "Las Palmas";
$provincias[13][] = "Santa Cruz de Tenerife";
$provincias[14][] = "Madrid";
$provincias[15][] = "Murcia";
$provincias[16][] = "Alicante";
$provincias[16][] = "Castellón";
$provincias[16][] = "Valencia";
$provincias[17][] = "Navarra";
$provincias[18][] = "Ceuta";
$provincias[19][] = "Melilla";
$objeto_json = new stdClass();
$objeto_json->provincias=$provincias[$com];
echo json_encode($objeto_json);


?>