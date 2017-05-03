<?php

class mdlMensaje extends padre {

    const PAGE = 'mensaje';

    public function onGestionPagina() {
        if (getGet('pagina') != self::PAGE)
            return;
        if (!isset($_SESSION['modificacion'])&& !isset($_SESSION['eliminacion']) && !isset($_SESSION['insercion']))
            redirectTo('index.php');
    }

    public function onCargarVista($path) {
        if (getGet('pagina') != self::PAGE)
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo MensajeParser::loadContent($vista);
    }

}
