<?php
class Usuarios {
    public static function searchUsuarioDB($usuario) {
        $database = medoo::getInstance ();
        $database->openConnection ( unserialize ( MYSQL_CONFIG ) );
        $datos = $database->select ( 'usuarios', 'Password', [
                "Usuario[=]" => $usuario
        ] );
        $database->closeConnection ();
        if ($datos)
            return $datos [0];
        else
            return $datos;
    }
    public static function searchNombreDB($nombre) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('usuarios', '*', ["Usuario[=]" => $nombre]);
        $database->closeConnection();
        return $datos;
    }
    public static function modifyDB($data, $nombre) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->update('usuarios', $data, ['Nombre' => $nombre]);
        $database->closeConnection();
        return $datos;
    }

	public static function insertDB($array_inser) {
		$database = medoo::getInstance ();
		$database->openConnection ( unserialize ( MYSQL_CONFIG ) );
		$datos = $database->insert ( 'usuarios', $array_inser );
		$database->closeConnection ();
		return $datos;
	}

	public static function duplicateUsuario($usuario) {
		$database = medoo::getInstance ();
		$database->openConnection ( unserialize ( MYSQL_CONFIG ) );
		$datos = ($database->count ( 'usuarios', [
				'Usuario' => $usuario
		] ) > 0) ? true : false;
		$database->closeConnection ();
		return $datos;
	}

	public static function duplicateEmail($email) {
		$database = medoo::getInstance ();
		$database->openConnection ( unserialize ( MYSQL_CONFIG ) );
		$datos = ($database->count ( 'usuarios', [
				'Email' => $email
		] ) > 0) ? true : false;
		$database->closeConnection ();
        return $datos;
	}

    //public static function modifyDB($data, $id) {
    //    $database = medoo::getInstance();
    //    $database->openConnection(unserialize(MYSQL_CONFIG));
    //    $datos = $database->update('usuarios', $data, ['id' => $id]);
    //    $database->closeConnection();
    //    return $datos;
    //}

}
