
<?php

class mdlOlvido extends padre {

    const PAGE = 'olvido';

    public function onGestionPagina() {
        if (self::PAGE != getGet('pagina', 'olvido'))
            return;
        if(!is_null(getPost(self::PAGE)))
        {
            $_SESSION['olvidar']=true;
            redirectTo('index.php?pagina=mensaje');
        }
    }

    public function onCargarVista($path) {
        if (self::PAGE != getGet('pagina', 'olvido'))
            return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo $vista;
    }

}
