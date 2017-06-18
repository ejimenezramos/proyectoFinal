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
    public static function searchCompras($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('compras', '*',["Id_Usuario[=]"=>$id]);
        $database->closeConnection();
        return $datos;
    }
    public static function searchComprasProducto($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('compras_productos', '*',["Id_Compra[=]"=>$id]);
        $database->closeConnection();
        return $datos;
    }
    public static function searchNombrePacks($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('packs', 'Nombre_Pack',["Id_Pack[=]"=>$id]);
        $database->closeConnection();
        return $datos[0];
    }
    public static function searchNombreProducto($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', 'Nombre_Prod',["Id_Producto[=]"=>$id]);
        $database->closeConnection();
        return $datos[0];
    }
    public static function searchProd($id) {
        $database = medoo::getInstance();
        $database->openConnection(unserialize(MYSQL_CONFIG));
        $datos = $database->select('productos', 'Nombre_Producto',["Id_Compra[=]"=>$id]);
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

    public static function insertCompProdDB($ins, $idProd, $po, $cant, $tipo) {
		$database = medoo::getInstance ();
		$database->openConnection ( unserialize ( MYSQL_CONFIG ) );
		$datos=$database->insert("compras_productos", [
                                                "Id_Compra" => $ins,
                                                "Id_Articulo" => $idProd,
                                                "Precio" => $po,
                                                "Cantidad"=>$cant,
                                                "Tipo"=>$tipo
                                            ]);
		$database->closeConnection ();
		return $datos;
	}
}

//$database->insert("account", [
//    "user_name" => "foo",
//    "email" => "foo@bar.com",
//    "age" => 25
//]);