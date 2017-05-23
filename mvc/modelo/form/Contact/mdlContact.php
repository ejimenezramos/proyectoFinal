<?php

class mdlContact extends padre {

    const PAGE = 'contact';

    public function onGestionPagina() {
        if (getGet('pagina') != self::PAGE)
            return;

// Validamos
        $val = Validacion::getInstance();
// Validamos los elementos que hay en $_POST
        $toValidate = ($_POST);
        $rules = array(
            'nombre' => 'required|alpha_space',
            'apellido' => 'required|alpha_space',
            'email' => 'required|email',
            'consulta' => 'required',
            'area' => 'required',
        );

        $val->addRules($rules);
        $val->run($toValidate);
        if (!is_null(getPost(self::PAGE))) {
            if ($val->isValid()) {
// Guardamos los datos en session
                $_SESSION[self::PAGE] = $val->getOks();
                $data = $_SESSION['login'];
                $datos = Usuario::insertDB($data);
                if ($datos) {
                    $_SESSION['info'] = 'logged';
                } else
                    $_SESSION['info'] = 'noLogged';
// Cambiamos el paso
                redirectTo('index.php?pagina=menu');
            }
        }
    }
    public function onCargarVista($path) {
        if (getGet('pagina') != self::PAGE) return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo ContactParser::loadContent($vista);
    }

}
