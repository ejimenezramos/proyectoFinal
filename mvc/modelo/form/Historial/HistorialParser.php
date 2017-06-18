<?php
class HistorialParser {
    public static function loadContent($vista) {
        $vista = self::pasoSiguiente($vista);
        return $vista;
    }
    public static function pasoSiguiente($vista) {

        foreach (getTagsVista($vista) as $tag) {
            $str = '';
            switch ($tag) {
                case "login":
                    $str="<li><a href='?pagina=login'><i class='fa fa-user'
							aria-hidden='true'></i>Login</a></li>";
                    $str.="<li><a href='?pagina=register'><i class='fa fa-user'
							aria-hidden='true'></i>Registro</a></li>";


                    if (isset($_SESSION['info'])) {
                        $info = $_SESSION['info'];
                        switch ($info) {
                            case "registed":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=account'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta: $usuario</a></li>";
                                $str .= "<li><a href='index.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                break;
                            case "noRegisted":
                                $str = "No registrado";
                                Session::del($_SESSION['info']);
                                break;
                            case "logged":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=account'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta: $usuario</a></li>";
                                $str .= "<li><a href='index.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                break;
                        }

                    }
                    break;
                case "compraRealizada":
                    $usuario = $_SESSION['usuarios'];
                    $id=Usuarios::getUserId($usuario);
                    $datos=Productos::searchCompras($id);
                    $h="<div id='comprasRealizadas'>";
$resul=$resul="<div id='comprasProd' type='hidden'>";
                    if($datos) {
                        foreach ($datos as $data) {
                            $h .= "<input type='hidden' id='compra[]' name='compra[]' value='" . $data['Id_Compra'] . ":" . $data['Id_Usuario'] . ":" . $data['Fecha'] . ":" . $data['Importe'] . "' >";
                            //$compraProducto=Productos::searchComprasProducto($data['Id_Compra']);

                            /*foreach ($compraProducto as $productos) {
                                if ($productos['Tipo'] == 'producto') {
                                    $consulprod = Productos::searchNombreProducto($productos['Id_Articulo']);

                                    $resul .= "<input type='hidden' id='resul[]' name='resul[]' value='" . $consulprod;
                                } else if($productos['Tipo'] == 'pack') {
                                    $consulpack = Productos::searchNombrePacks($productos['Id_Articulo']);

                                    $resul .= "<input type='hidden' id='resul[]' name='resul[]' value='" . $consulpack;

                                }

                               $resul.=":".$productos['Cantidad'].":".$productos['Precio'].":".$productos['Id_Compra']."' >";*/
                        }

                    $_SESSION['historialCompra']=$resul."</div>";
                    $_SESSION['historial']=$h."</div>";
                    $str.=$_SESSION['historial'];
                        $str.=$_SESSION['historialCompra'];

                    }
                    else{
                        $str.="<p class='has-warning'>No tiene pedidos";
                    }
                    break;
            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista ;
    }
}