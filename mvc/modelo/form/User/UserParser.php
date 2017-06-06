<?php

class UserParser
{
	public static function loadContent($vista) {
		$val = Validacion::getInstance();
		$vista = self::pasoSiguiente($vista);
		return $vista;
	}

	public static function pasoSiguiente($vista) {
		$val = Validacion::getInstance();
		$required_fields = '';
		$warning_fields = '';
		
		foreach ($val->getErrors() as $field => $error) {
			$value = $error['value'];
			$rule = $error['rule'];
			switch ($rule) {
				case 'ok':
					$vista = str_replace('{{class-'.$field.'}}', '', $vista);
					break;
				case 'required':
					$required_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-'.$field.'}}', 'has-error', $vista);
					break;
				case 'integer':
					$warning_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-'.$field.'}}', 'has-warning', $vista);
					$vista = str_replace('{{war-'.$field.'}}', $val->getStrRule($rule), $vista);
					break;
			}
		}
		
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
							aria-hidden='true'></i>Cerrar Sesi�n</a></li>";
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
