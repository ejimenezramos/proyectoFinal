
<?php

class mdlHome extends padre {

    const PAGE = 'home';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'home'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'home'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
