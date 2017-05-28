<?php

class Usuarios {

    public static function searchIdDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('usuarios', '*', ["id[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }
    public static function insertDB($array_inser) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->insert('usuarios', $array_inser);
        $database->closeConnection();
        return $datos;
    }
    public static function duplicateUsuario($usuario) {
        $database = medoo::getInstance ();
        $database->openConnection ( unserialize ( MYSQL_CONFIG ) );
        $datos = ($database->count ( 'usuarios', [
                'usuario' => $usuario
            ] ) > 0) ? true : false;
        $database->closeConnection ();
        return $datos;
    }
    public static function duplicateEmail($email)
    {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = ($database->count('usuarios', [
                'email' => $email
            ]) > 0) ? true : false;
        $database->closeConnection();

    }
    }
