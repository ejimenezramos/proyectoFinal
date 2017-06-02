<?php

class ProductosParser
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
                    switch($_SESSION['info'])
                    {
                        case "registed":
                            $usuario=$_SESSION['usuarios'];
                            $str="<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Bienvenido: $usuario</a></li>";
                            $str.="<li><a href='logout.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                            Session::del($_SESSION['info']);
                            break;
                        case "noRegisted":
                            $str="No registrado";
                            Session::del($_SESSION['info']);
                            break;
                        case "logged":
                            $usuario=$_SESSION['usuarios'];
                            $str="<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Bienvenido: $usuario</a></li>";
                            $str.="<li><a href='logout.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                            Session::del($_SESSION['info']);
                            break;
                    }
                    break;
			}
			$vista = str_replace('{{' . $tag . '}}', $str, $vista);
		}
		return $vista;
	}

}

