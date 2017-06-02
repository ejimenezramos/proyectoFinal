<?php
class HomeParser {

	public static function loadContent($vista) {
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
					$vista = str_replace('{{class-' . $field . '}}', '', $vista);
					break;
				case 'required':
					$required_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-' . $field . '}}', 'has-error', $vista);
					break;
				case 'alpha_space':
					$warning_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-' . $field . '}}', 'has-warning', $vista);
					$vista = str_replace('{{war-' . $field . '}}', $val->getStrRule($rule), $vista);
					break;
				case 'number':
					$warning_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-' . $field . '}}', 'has-warning', $vista);
					$vista = str_replace('{{war-' . $field . '}}', $val->getStrRule($rule), $vista);
					break;
				case 'dni':
					$warning_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-' . $field . '}}', 'has-warning', $vista);
					$vista = str_replace('{{war-' . $field . '}}', $val->getStrRule($rule), $vista);
					break;
				case 'duplicate':
					$warning_fields .= "<strong>$field</strong>, ";
					$vista = str_replace('{{class-' . $field . '}}', 'has-warning', $vista);
					$vista = str_replace('{{war-' . $field . '}}', $val->getStrRule($rule), $vista);
					break;
			}
		}
		foreach (getTagsVista($vista) as $tag) {
			$str = '';
			switch ($tag) {
				case "errores":
					if (strlen($required_fields) > 0) {
						$required_fields = substr($required_fields, 0, -2);
						$str .= "<p class='has-error'>El/Los campo(s) $required_fields son obligatorios</p>";
					}
					if (strlen($warning_fields) > 0) {
						$warning_fields = substr($warning_fields, 0, -2);
						$str .= "<p class='has-warning'>El/Los campo(s) $warning_fields tienen errores de formato.</p>";
					}
					break;
                case "login":
                    $str="<li><a href='?pagina=login'><i class='fa fa-user'
							aria-hidden='true'></i>Login</a></li>";
                    $str.="<li><a href='?pagina=register'><i class='fa fa-user'
							aria-hidden='true'></i>Registro</a></li>";
<<<<<<< HEAD
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
=======
                    if (isset($_SESSION['info'])) {
                        $info = $_SESSION['info'];
                        switch ($info) {
                            case "registed":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Bienvenido: $usuario</a></li>";
                                $str .= "<li><a href='?pagina=home&cerrar=true'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesiï¿½n</a></li>";
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
							aria-hidden='true'></i>Cerrar SesiÃ³n</a></li>";
                                $str .= "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta</a></li>";
                                Session::del($_SESSION['info']);
                                break;
                        }
                        break;
>>>>>>> 48ed02d9fa074383c340a11cee97654552fc25ae
                    }
			}
			$vista = str_replace('{{' . $tag . '}}', $str, $vista);
		}
		return $vista;
	}

}

