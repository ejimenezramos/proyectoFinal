<?php

class Usuario {

    public static function searchIdDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('usuarios', '*', ["id[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }

}
