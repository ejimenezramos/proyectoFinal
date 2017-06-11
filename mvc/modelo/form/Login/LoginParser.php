<?php


class LoginParser
{
    public static function loadContent($vista){

        $vista = self::pasoSiguiente($vista);
        return $vista;
    }

    public static function pasoSiguiente($vista){
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

                    break;
                case 'integer':
                    $warning_fields .= "<strong>$field</strong>, ";

                    $vista = str_replace('{{war-' . $field . '}}', $val->getStrRule($rule), $vista);
                    break;
                case 'alpha_space':
                    $warning_fields .= "<strong>$field</strong>, ";

                    $vista = str_replace('{{war-' . $field . '}}', $val->getStrRule($rule), $vista);
                    break;
                case 'alphanum_space':
                    $warning_fields .= "<strong>$field</strong>, ";

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
                case "mensaje":
                    if(isset($_SESSION['mens']))
                        $str="Usuario o contraseña incorrectos, por favor inténtelo de nuevo. Si no está registrado en nuestra página, ".
                        "puede hacerlo pinchando el siguiente enlace: <a href='?pagina=register' class='forg'><u>Registrarse</u></a>";
                    Session::del('mens');

                    break;
                case "intentoCompra":
                    if(isset($_SESSION['intentoCompra'])){
                        $str="Para realizar una compra es necesario Iniciar Sesión";
                        Session::del('intentoCompra');
                    }
                    break;


            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }
}