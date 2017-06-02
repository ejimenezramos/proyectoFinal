
<?php

class mdlProductos extends padre {

    const PAGE = 'productos';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'productos'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'productos'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo ProductosParser::loadContent($vista);
    }

}
