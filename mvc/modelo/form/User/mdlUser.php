<?php

class mdlUser extends padre {

    const PAGE = 'user';

    public function onGestionPagina() {
        if (getGet('pagina') != self::PAGE)
            return;
        $search = $_SESSION['usuarios'];
        if (is_null(getPost(self::PAGE))) { //verificamos si no se ha pulsado el bot�n edici�n
            $datos = Usuarios::searchNombreDB($search);
            if (count($datos) > 0) {
                // Utilizamos la validaci�n para rellenar los campos del formulario.
                $val = Validacion::getInstance();
                $toValidate = $datos[0];
                $rules = array(
                    'Nombre' => 'required|alpha_space',
                    'Apellidos' => 'required|alpha_space',
                    'Direccion' => 'required|alpha_space',
                    'Telefono' => 'required|tel',
                    'Email' => 'required|email',
                    'Usuario' => 'required|alpha_num',
                    'DNI' => 'required|dni',
                    'Fecha_nac' => 'required'
                );
                $val->addRules($rules);
                $val->run($toValidate);
            } else
                redirectTo('index.php?pagina=home');
        } else {
            // Validamos
            $val = Validacion::getInstance();
            $toValidate = $_POST;
            $rules = array(
                'Nombre' => 'required|alpha_space',
                    'Apellidos' => 'required|alpha_space',
                    'Direccion' => 'required|alpha_space',
                    'Telefono' => 'required|tel',
                    'Email' => 'required|email',
                    'Usuario' => 'required|alpha_num',
                    'DNI' => 'required|dni',
                    'Fecha_nac' => 'required'
            );
            $val->addRules($rules);
            $val->run($toValidate);
            // Guardamos los datos en la sesi�n
            if ($val->isValid()) {
                $_SESSION[self::PAGE] = $val->getOks();
                $nombre = $_SESSION['user']['Nombre'];
                $data = $_SESSION['user'];
                $datos = Usuarios::modifyDB($data, $nombre);
                if ($datos){
                    $_SESSION['mod'] = true;
                    $_SESSION['usuarios']=getPost('Usuario');
                }
                else
                    $_SESSION['mod'] = false;
                redirectTo('index.php?pagina=user');
            }
        }
    }

    public function onCargarVista($path) {
        if (getGet('pagina') != self::PAGE)
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo UserParser::loadContent($vista);
    }

}
