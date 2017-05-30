<?php

class Productos {


    public static function searchIdDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', '*', ["OR"=>["Nombre_Prod[~]"=>$id, "Tipo[~]"=>$id]]);
        $database->closeConnection();
        return $datos;
    }
    
    public static function searchAllDB() {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', '*');
        $database->closeConnection();
        return $datos;
    }

}