<?php class MensajeParser
{
    public static function loadContent($vista){
        $vista = self::pasoSiguiente($vista);
        return $vista;
    }

    public static function pasoSiguiente($vista){

        foreach (getTagsVista($vista) as $tag) {
            $str = '';
            switch ($tag) {
                case "nombre":
                    if (isset($_SESSION['contactUser']))
                    {
                        $str=$_SESSION['contactUser'].", su mensaje de contacto ha sido enviado.
                        Nos pondremos en contacto con usted lo más rápido posible atendiendo su petición. Gracias,
                        de esta forma nos ayudas a crecer.";
                        Session::del('contactUser');
                    }
                    break;
                case "olvido":
                    if(isset($_SESSION['olvidar']))
                    {
                        $str="Hemos enviado un email a su correo electrónico con los pasos que debe realizar para reestablecer
                        su contraseña.";
                        Session::del('olvidar');
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
                                $str = "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta: $usuario</a></li>";
                                $str .= "<li><a href='index.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                break;
                            case "noRegisted":
                                $str = "No registrado";
                                break;
                            case "logged":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=user'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta: $usuario</a></li>";
                                $str .= "<li><a href='index.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                break;
                        }

                    }
                    break;

            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }
}