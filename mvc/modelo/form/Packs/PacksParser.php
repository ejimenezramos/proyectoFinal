<?php

/**
 * PacksParser short summary.
 *
 * PacksParser description.
 *
 * @version 1.0
 * @author mlehhit
 */
class PacksParser
{
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
                                $str = "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Bienvenido: $usuario</a></li>";
                                $str .= "<li><a href='?pagina=home&cerrar=true'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesi?n</a></li>";
                                $str .= "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta</a></li>";
                                Session::del($_SESSION['info']);
                                break;
                            case "noRegisted":
                                $str = "No registrado";
                                Session::del($_SESSION['info']);
                                break;
                            case "logged":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Bienvenido: $usuario</a></li>";
                                $str .= "<li><a href='?pagina=home&cerrar=true'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                $str .= "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta</a></li>";
                                Session::del($_SESSION['info']);
                                break;
                        }
                        break;
                    }
			}
			$vista = str_replace('{{' . $tag . '}}', $str, $vista);
		}
		return $vista;
	}

}

