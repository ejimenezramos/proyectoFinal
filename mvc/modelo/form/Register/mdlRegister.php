
<?php

class mdlRegister extends padre {

    const PAGE = 'register';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'register'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'register'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
