
<?php

class mdlAboutus extends padre {

    const PAGE = 'aboutus';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'aboutus'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'aboutus'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
