<?php

class mdlListado extends Padre {

    const PAGE = 'listado';

    public function onGestionPagina() {
        if (getGet('pagina') != self::PAGE)
            return;
// Si no ha pasado por el paso Busqueda (si se modifica el valor de la variable en la url), se vuelve a visualizar la p�gina inicial
        if (!isset($_SESSION['home']) && !isset($_SESSION['listar']))
            redirectTo('home.php');
    }

    public function onCargarVista($path) {
        if (getGet('pagina') != self::PAGE)
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo ListadoParser::loadContent($vista);
    }

}
