<?php
/**
 * Created by PhpStorm.
 * User: elena.jimenez
 * Date: 16/05/2017
 * Time: 11:27
 */

require_once "../include.php";
$com = $_POST['codigoComunidad'];
$provincias["Andalucía"][] = "Almería";
$provincias["Andalucía"][] = "Cádiz";
$provincias["Andalucía"][] = "Córdoba";
$provincias["Andalucía"][] = "Granada";
$provincias["Andalucía"][] = "Huelva";
$provincias["Andalucía"][] = "Jaén";
$provincias["Andalucía"][] = "Málaga";
$provincias["Andalucía"][] = "Sevilla";
$provincias["Aragón"][] = "Huesca";
$provincias["Aragón"][] = "Teruel";
$provincias["Aragón"][] = "Zaragoza";
$provincias["Asturias"][] = "Asturias";
$provincias["Cantabria"][] = "Cantabria";
$provincias["Castilla y León"][] = "Ávila";
$provincias["Castilla y León"][] = "Burgos";
$provincias["Castilla y León"][] = "León";
$provincias["Castilla y León"][] = "Palencia";
$provincias["Castilla y León"][] = "Salamanca";
$provincias["Castilla y León"][] = "Segovia";
$provincias["Castilla y León"][] = "Soria";
$provincias["Castilla y León"][] = "Valladolid";
$provincias["Castilla y León"][] = "Zamora";
$provincias["Castilla-La Mancha"][] = "Albacete";
$provincias["Castilla-La Mancha"][] = "Ciudad Real";
$provincias["Castilla-La Mancha"][] = "Cuenca";
$provincias["Castilla-La Mancha"][] = "Guadalajara";
$provincias["Castilla-La Mancha"][] = "Toledo";
$provincias["Cataluña"][] = "Barcelona";
$provincias["Cataluña"][] = "Gerona";
$provincias["Cataluña"][] = "Lérida";
$provincias["Cataluña"][] = "Tarragona";
$provincias["Extremadura"][] = "Badajoz";
$provincias["Extremadura"][] = "Cáceres";
$provincias["Galicia"][] = "La Coruña";
$provincias["Galicia"][] = "Lugo";
$provincias["Galicia"][] = "Orense";
$provincias["Galicia"][] = "Pontevedra";
$provincias["La Rioja"][] = "La Rioja";
$provincias["Islas Baleares"][] = "Baleares";
$provincias["País Vasco"][] = "Álava";
$provincias["País Vasco"][] = "Guipúzcoa";
$provincias["País Vasco"][] = "Vizcaya";
$provincias["Canarias"][] = "Las Palmas";
$provincias["Canarias"][] = "Santa Cruz de Tenerife";
$provincias["Comunidad de Madrid"][] = "Madrid";
$provincias["Región de Murcia"][] = "Murcia";
$provincias["Comunidad Valenciana"][] = "Alicante";
$provincias["Comunidad Valenciana"][] = "Castellón";
$provincias["Comunidad Valenciana"][] = "Valencia";
$provincias["Navarra"][] = "Navarra";
$provincias["Ceuta"][] = "Ceuta";
$provincias["Melilla"][] = "Melilla";
$objeto_json = new stdClass();
$objeto_json->provincias=$provincias[$com];
echo json_encode($objeto_json);


?>