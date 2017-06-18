
<?php

class mdlAccount extends padre {

    const PAGE = 'account';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'account'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'account'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo AccountParser::loadContent($vista);
    }

}
