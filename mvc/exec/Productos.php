<?php

class Productos {


    public static function searchIdDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', '*', ["OR"=>["Nombre_Prod[~]"=>$id, "Tipo[~]"=>$id]]);
        $database->closeConnection();
        return $datos;
    }

    public static function searchPrecioDB($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', 'precio', ["Id_Producto[=]"=>$id]);
        $database->closeConnection();
        if ($datos)
            return $datos [0];
        else
            return $datos="";
    }

    public static function searchAllDB() {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', '*');
        $database->closeConnection();
        return $datos;
    }

    public static function insertDB($idUser, $fecha, $precio) {
		$database = medoo::getInstance ();
		$database->openConnection ( unserialize ( MYSQL_CONFIG ) );
		$database->insert("compras", [
                                                "Fecha" => $fecha,
                                                "Id_Usuario" => $idUser,
                                                "Importe" => $precio
                                            ]);
        $account_id = $database->id();
		$database->closeConnection ();
		return $account_id;
	}

    public static function insertCompProdDB($ins, $idProd, $po, $cant) {
		$database = medoo::getInstance ();
		$database->openConnection ( unserialize ( MYSQL_CONFIG ) );
		$database->insert("compras_productos", [
                                                "Id_Compra" => $ins,
                                                "Id_Producto" => $idProd,
                                                "Precio" => $po,
                                                "Cantidad"=>$cant
                                            ]);
        $account_id = $database->id();
		$database->closeConnection ();
		return $account_id;
	}
}

//$database->insert("account", [
//    "user_name" => "foo",
//    "email" => "foo@bar.com",
//    "age" => 25
//]);