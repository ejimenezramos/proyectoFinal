
<?php

class mdlLogin extends padre {

    const PAGE = 'login';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'login'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'login'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
