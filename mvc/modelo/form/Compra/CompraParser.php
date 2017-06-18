<?php
class CompraParser {
    public static function loadContent($vista) {
        $vista = self::pasoSiguiente($vista);
        return $vista;
    }
    public static function pasoSiguiente($vista) {

        foreach (getTagsVista($vista) as $tag) {
            $str = '';
            switch ($tag) {
                case "compraMensaje":
                    if (isset($_SESSION['compraMens'])) {
                        $str = $_SESSION['compraMens'];
                        Session::del('compraMens');
                    }
                    break;
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
                case "carrito":
                    $str = $_SESSION ['compra'];

                    break;

            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista ;
    }
}