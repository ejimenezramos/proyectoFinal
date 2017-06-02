
<?php

class mdlPacks extends padre {

    const PAGE = 'packs';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'packs'))
            return;
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'packs'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo PacksParser::loadContent($vista);
    }

}
