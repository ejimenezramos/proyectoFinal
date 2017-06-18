
<?php

class mdlHistorial extends padre {

    const PAGE = 'historial';

    public function onGestionPagina()
    {
        if (self::PAGE != getGet('pagina', 'historial'))
            return;


    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'historial'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo HistorialParser::loadContent($vista);
    }

}
