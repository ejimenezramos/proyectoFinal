
<?php

class mdlContact extends padre {

    const PAGE = 'contact';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'contact'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'contact'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
