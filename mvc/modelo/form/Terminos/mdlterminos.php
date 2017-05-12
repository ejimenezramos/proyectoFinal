
<?php

class mdlTerminos extends padre {

    const PAGE = 'terminos';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'terminos'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'terminos'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
