<?php

class mdlUser extends Padre {

    const PAGE = 'user';

    public function onGestionPagina() {
        if (getGet('pagina') != self::PAGE)
            return;
// Validamos
        $val = Validacion::getInstance();
// Validamos los elementos que hay en $_POST
        $toValidate = ($_POST);
        $rules = array(
            'id' => 'required');
        $id = getPost('id');
        $val->addRules($rules);
        $val->run($toValidate);
        if (!is_null(getPost(self::PAGE))) {
            if ($val->isValid()) {
// Guardamos los datos en session
                $_SESSION[self::PAGE] = $val->getOks();
// Cambiamos el paso
                redirectTo('index.php?pagina=home');
            }
        }

    }


    public function onCargarVista($path) {
        if (getGet('pagina') != self::PAGE)
            return;
        if(isset($_GET['cerrar']))
        {
            session_destroy();
        }
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();

        echo UserParser::loadContent($vista);
    }

}

