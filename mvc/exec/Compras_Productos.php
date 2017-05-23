<?php

class Autores {

    public static function searchIdDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('autores', '*', ["id[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }

    public static function searchAllDB() {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('autores', '*');
        $database->closeConnection();
        return $datos;
    }

    public static function insertDB($array_inser) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->insert('autores', $array_inser);
        $database->closeConnection();
        return $datos;
    }

    public static function removeDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->delete('autores', ["id[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }
        public static function modifyDB($data, $id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->update('autores', $data, ['id' => $id]);
        $database->closeConnection();
        return $datos;
    }

}
